<?php 

declare(strict_types=1);

namespace App\Controller;

use App\Classes\Book;
use App\DataBases\BookDataBase;
use App\Controller\SearchBookController;
use App\Controller\AddBookController;
use InvalidArgumentException;

class ReturnBookController
{

    protected $bookDataBase;
    protected $addBookController;
    protected $searchBookController;
    protected $books;

    public function __construct(BookDatabase $bookDataBase)
    {
        $this->bookDataBase = $bookDataBase;
        $this->addBookController = new AddBookController($this->bookDataBase);
        $this->searchBookController = new SearchBookController($this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
    }

    public function giveBackBook(Book $returnedBook, BookDataBase $bookDataBase)
    {

        if ($returnedBook->getBookNumPages() < 500) {
            return throw new InvalidArgumentException("No se pueden devolver libros de menos de 500 páginas");
        }

        $this->addBookController->addBook($returnedBook, $bookDataBase);
    }
}
