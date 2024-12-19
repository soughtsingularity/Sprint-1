<?php 

declare(strict_types=1);

namespace App\Controller;

use App\Controller\SearchBookController;
use App\DataBases\BookDataBase;
use App\Classes\Book;
use InvalidArgumentException;

class ModifyBookController
{

    protected $books;
    protected $searchBookController;
    protected $bookDataBase;

    public function __construct(BookDataBase $bookDataBase)
    {
        $this->bookDataBase = $bookDataBase;
        $this->searchBookController = new SearchBookController($bookDataBase);
        $this->books = $this->searchBookController->getBooks();
    }


    public function modifyBookByIsbn(string $isbn, Book $newData, $bookDataBase)
    {

        $this->books = $bookDataBase->getBooks();

        if ($newData->getBookNumPages() <= 0) {
            throw new InvalidArgumentException("El numero de páginas debe ser un número entero");
        }

        $found = false; 
        foreach ($this->books as $foundBook) {
            if ($isbn === $foundBook->getBookIsbn()) {
                $found = true;
                $foundBook->setBookTitle($newData->getBookTitle());
                $foundBook->setBookAuthor($newData->getBookAuthor());
                $foundBook->setBookGenre($newData->getBookGenre());
                $foundBook->setBookIsbn($newData->getBookIsbn());
                $foundBook->setBookNumPages($newData->getBookNumPages());

                return $bookDataBase->updateBook($foundBook);
                break;
            }
        }

        $this->books = $this->searchBookController->getBooks();

        if (!$found) {
            throw new InvalidArgumentException("El libro con ISBN '{$isbn}' no se encontró en la base de datos.");
        }
    }
}
