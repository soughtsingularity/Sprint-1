<?php 

declare(strict_types=1);

namespace App\Controller;

use App\DataBases\BookDataBase;
use App\Controller\SearchBookController;
use InvalidArgumentException;

class DeleteBookController
{
    protected $bookDatabase;
    protected $searchBookController;
    protected $books;

    public function __construct(BookDatabase $bookDatabase)
    {
        $this->bookDatabase = $bookDatabase;
        $this->searchBookController = new SearchBookController($this->bookDatabase);
    }

    public function deleteBook($book, $bookDataBase)
    {
        $this->books = $bookDataBase->getBooks();

        $found = false;

        foreach ($this->books as $index => $value) {
            if ($book->getBookIsbn() === $value->getBookIsbn()) {
                $this->bookDatabase->deleteBook($index);
                $found = true;
                break;
            }
        }
        if (!$found) {
            throw new InvalidArgumentException("El libro con ISBN {$book->getBookIsbn()} no existe en la base de datos.");
        }
    }
}
