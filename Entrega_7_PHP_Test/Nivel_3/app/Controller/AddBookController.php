<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\SearchBookController;
use App\DataBases\BookDataBase;
use InvalidArgumentException;

class AddBookController
{
    protected $books;
    protected $searchBookController;
    protected $bookDataBase;

    public function __construct(BookDataBase $bookDataBase)
    {
        $this->bookDataBase = $bookDataBase;
        $this->searchBookController = new SearchBookController($this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
    }

    public function addBook($book, BookDataBase $bookDataBase)
    {
        $this->books = $bookDataBase->getBooks();


        if ($book->getBookNumPages() <= 0) {
            throw new InvalidArgumentException("El numero de páginas debe ser mayor que cero.");
        }

        foreach ($this->books as $existingBook) {
            if ($existingBook->getBookIsbn() === $book->getBookIsbn()) {
                if (
                    $existingBook->getBookTitle() !== $book->getBookTitle() ||
                    $existingBook->getBookAuthor() !== $book->getBookAuthor() ||
                    $existingBook->getBookGenre() !== $book->getBookGenre() ||
                    $existingBook->getBookNumPages() !== $book->getBookNumPages()
                ) {
                    throw new InvalidArgumentException("El libro con ISBN {$book->getBookIsbn()} tiene datos inconsistentes.");
                }
            }

        }

        $this->bookDataBase->addBook($book);
        $this->books = $this->searchBookController->getBooks();
    }
}
