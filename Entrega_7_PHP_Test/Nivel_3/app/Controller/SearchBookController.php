<?php 

declare(strict_types=1);

namespace App\Controller;

use App\DataBases\BookDataBase;
use InvalidArgumentException;

class SearchBookController
{

    protected $bookDataBase;
    protected $books;
    protected $foundBooks;

    public function __construct(BookDataBase $bookDataBase){
        $this->bookDataBase = $bookDataBase;
        $this->books = $this->bookDataBase->getBooks();
        $this->foundBooks = [];
    }

    public function getBooks(){
        return $this->bookDataBase->getBooks();
    }


    public function findBookByTitle($bookTitle, BookDataBase $bookDataBase)
    {
        $this->books = $bookDataBase->getBooks();
        $foundBooks = [];
        foreach ($this->books as $book) {
            if ($book->getBookTitle() === $bookTitle) {
                $foundBooks[] = $book;
            }
        }
        if (empty($foundBooks)) {
            throw new InvalidArgumentException("No hay libros con Titulo {$bookTitle} en la base de datos.");
        }

        return $foundBooks;
    }

    public function findBookByGenre($bookGenre, BookDataBase $bookDataBase){
        $this->books = $bookDataBase->getBooks(); 
        $foundBooks = [];
        foreach ($this->books as $book) {
            if ($book->getBookGenre() === $bookGenre) {
                $foundBooks[] = $book;
            }
        }

        if (empty($foundBooks)) {
            throw new InvalidArgumentException("No hay libros con Género {$bookGenre} en la base de datos.");
        }

        return $foundBooks;
    }

    public function findBookByIsbn($bookIsbn, BookDataBase $bookDataBase)
    {
        $this->books = $bookDataBase->getBooks();
        $foundBooks = [];
        foreach ($this->books as $book) {
            if ($book->getBookIsbn() === $bookIsbn) {
                $foundBooks[] = $book;
            }
        }
        if (empty($foundBooks)) {
            throw new InvalidArgumentException("No hay libros con Isbn {$bookIsbn} en la base de datos.");
        }
        return $foundBooks;
    }

    public function findBookByAuthor($bookAuthor, BookDataBase $bookDataBase){
        $this->books = $bookDataBase->getBooks();
        $foundBooks = [];
        foreach ($this->books as $book) {
            if ($book->getBookAuthor() === $bookAuthor) {
                $foundBooks[] = $book;
            }
        }
        if (empty($foundBooks)) {
            throw new InvalidArgumentException("No hay libros con Autor {$bookAuthor} en la base de datos.");
        }
        return $foundBooks;
    }
}
