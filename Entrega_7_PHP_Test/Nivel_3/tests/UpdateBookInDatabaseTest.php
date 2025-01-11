<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Classes\Book;
use App\DataBases\BookDataBase;
use InvalidArgumentException;

class UpdateBookInDatabaseTest extends TestCase
{
    public function testUpdateBookThrowsExceptionForNonexistentISBN(): void
    {
        $bookDataBase = new BookDataBase();
        $nonexistentBook = new Book("The Great Gatsby", "F. Scott Fitzgerald", "0000000000000", "Aventuras", 100);

        $this->expectException(InvalidArgumentException::class);
        $bookDataBase->updateBook($nonexistentBook);
    }
}
