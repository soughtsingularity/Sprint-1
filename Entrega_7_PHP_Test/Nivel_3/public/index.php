<?php 

require __DIR__ . '/../vendor/autoload.php';

/*

No he querido comprobar que los datos introducidos en la aplicaci´on eran
los correctos o consistentes ya que se trataba de un ejercicio de testing y
he pensado que era mejor que, si algún dato causaba una excepción, 
quedara reflejado por las excepciones lanzadas por los controladores
y no por un mensaje que nos avisa de que no hemos introducido bien el 
dato en cuestión

*/

use App\Classes\Book;
use App\DataBases\BookDataBase;
use App\Controller\AddBookController;
use App\Controller\DeleteBookController;
use App\Controller\ModifyBookController;
use App\Controller\SearchBookController;
use App\Controller\ReturnBookController;

$bookDataBase = new BookDataBase();

echo "Gestión de biblioteca\n";

do {
    echo "¿Qué gestión deseas hacer?\n \n";
    echo "1. Añadir libro\n2.-Eliminar libro\n3.-Modificar informacion de un libro\n4.-Buscar un libro\n5.-Devolver un libro\n \n";
    $opcion = readline("Introduce la opcion");

    switch ($opcion) {
        case 1:
            echo "Introduce el titulo del libro: ";
            $bookTitle = readline();
            echo "Introduce el autor del libro: ";
            $bookAuthor = readline();
            echo "Introduce el ISBN del libro: ";
            $bookIsbn = readline();
            echo "Introduce el genero del libro: ";
            $bookGenre = readline();
            echo "Introduce el numero de paginas del libro: ";
            $bookNumPages = (int) readline();
            $book = new Book($bookTitle, $bookAuthor, $bookIsbn, $bookGenre, $bookNumPages);
            addBook($book, $bookDataBase);
            break;

        case 2:
            echo "Introduce el titulo del libro: ";
            $bookTitle = readline();
            echo "Introduce el autor del libro: ";
            $bookAuthor = readline();
            echo "Introduce el ISBN del libro: ";
            $bookIsbn = readline();
            echo "Introduce el genero del libro: ";
            $bookGenre = readline();
            echo "Introduce el numero de paginas del libro: ";
            $bookNumPages = (int) readline();
            $book = new Book($bookTitle, $bookAuthor, $bookIsbn, $bookGenre, $bookNumPages);
            deleteBook($book, $bookDataBase);
            break;

        case 3:
            echo "Introduce el ISBN del libro a modificar: ";
            $bookIsbn = readline();
            echo "Introduce el titulo de la nueva edición: ";
            $bookTitle = readline();
            echo "Introduce el autor de la nueva edición: ";
            $bookAuthor = readline();
            echo "Introduce el genero de la nueva edición: ";
            $bookGenre = readline();
            echo "Introduce el numero de paginas de la nueva edición: ";
            $bookNumPages = (int) readline();
            $newData = new Book($bookTitle, $bookAuthor, $bookIsbn, $bookGenre, $bookNumPages);
            modifyBook($bookIsbn, $newData, $bookDataBase);
            break;

        case 4:
            echo "Buscas un libro por...\n1.- Titulo\n2.- Género\n3.-Isbn\n4.-Autor\n";
            $opcion = readline("Introduce la opción");

            switch ($opcion) {
                case 1:
                    $title = readline("Introduce el titulo");
                    $foundBooks = findBookByTitle($title, $bookDataBase);
                    array_map(function ($value) {
                        echo $value->toString() . PHP_EOL;
                    }, $foundBooks);
                    break;

                case 2:
                    $genre = readline("Introduce el género");
                    $foundBooks = findBookByGenre($genre, $bookDataBase);
                    array_map(function ($value) {
                        echo $value->toString() . PHP_EOL;
                    }, $foundBooks);
                    break;

                case 3:
                    $isbn = readline("Introduce el Isbn");
                    $foundBooks = findBookByIsbn($isbn, $bookDataBase);
                    array_map(function ($value) {
                        echo $value->toString() . PHP_EOL;
                    }, $foundBooks);
                    break;

                case 4:
                    $author = readline("Introduce el autor");
                    $foundBooks = findBookByAuthor($author, $bookDataBase);
                    array_map(function ($value) {
                        echo $value->toString() . PHP_EOL;
                    }, $foundBooks);
                    break;
            }
            break;

        case 5: 
            echo "Introduce el titulo del libro: ";
            $bookTitle = readline();
            echo "Introduce el autor del libro: ";
            $bookAuthor = readline();
            echo "Introduce el ISBN del libro: ";
            $bookIsbn = readline();
            echo "Introduce el genero del libro: ";
            $bookGenre = readline();
            echo "Introduce el numero de paginas del libro: ";
            $bookNumPages = (int) readline();
            $book = new Book($bookTitle, $bookAuthor, $bookIsbn, $bookGenre, $bookNumPages);
            giveBackBook($book, $bookDataBase);
            break;
    }
} while ($opcion != 6);

function addBook(Book $book, BookDataBase $bookDataBase) {
    $addBookController = new AddBookController($bookDataBase);
    $addBookController->addBook($book, $bookDataBase);
    echo "Libro añadido correctamente\n";
}

function deleteBook(Book $book, BookDataBase $bookDataBase) {
    $deleteBookController = new DeleteBookController($bookDataBase);
    $deleteBookController->deleteBook($book, $bookDataBase);
    echo "Libro eliminado correctamente\n";
}

function modifyBook($bookIsbn, $newData, BookDataBase $bookDataBase) {
    $modifyBookController = new ModifyBookController($bookDataBase);
    $modifyBookController->modifyBookByIsbn($bookIsbn, $newData, $bookDataBase);
    echo "Libro modificado correctamente\n";
}

function findBookByTitle($title, BookDataBase $bookDataBase) {
    $searchBookController = new SearchBookController($bookDataBase);
    return $searchBookController->findBookByTitle($title, $bookDataBase);
}

function findBookByGenre($genre, BookDataBase $bookDataBase) {
    $searchBookController = new SearchBookController($bookDataBase);
    return $searchBookController->findBookByGenre($genre, $bookDataBase);
}

function findBookByIsbn($isbn, BookDataBase $bookDataBase) {
    $searchBookController = new SearchBookController($bookDataBase);
    return $searchBookController->findBookByIsbn($isbn, $bookDataBase);
}

function findBookByAuthor($author, BookDataBase $bookDataBase) {
    $searchBookController = new SearchBookController($bookDataBase);
    return $searchBookController->findBookByAuthor($author, $bookDataBase);
}

function giveBackBook($book, BookDataBase $bookDataBase) {
    $returnBookController = new ReturnBookController($bookDataBase);
    $returnBookController->giveBackBook($book, $bookDataBase);
    echo "Libro devuelto correctamente\n";
}

