<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Controller\AddBookController;
use App\Controller\SearchBookController;
use App\DataBases\BookDataBase;
use App\Classes\Book;
use App\Controller\ReturnBookController;
use InvalidArgumentException;

class ReturnBookControllerTest extends TestCase
{
    protected $bookDataBase;
    protected $addBookController;
    protected $searchBookController;
    protected $books;
    protected $bookTitle;
    protected $bookAuthor;
    protected $bookIsbn;
    protected $bookGenre;
    protected $bookNumPages;
    protected $book;
    protected $returnBookController;

    public function setUp(): void
    {
        $this->bookTitle = "La isla del tesoro";
        $this->bookGenre = "Aventuras";
        $this->bookIsbn = "9788476699676";
        $this->bookNumPages = 500;
        $this->bookAuthor = "Robert Louis Stevenson";
        $this->book = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, $this->bookGenre, $this->bookNumPages);
        $this->bookDataBase = new BookDataBase();
        $this->addBookController = new AddBookController($this->bookDataBase);
        $this->searchBookController = new SearchBookController($this->bookDataBase);
        $this->returnBookController = new ReturnBookController($this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();

    }

    public function testReturnBook()
    {
        $this->assertNotContainsEquals($this->book, $this->books);
        $this->assertGreaterThan(200, $this->book->getBookNumPages());
        $this->returnBookController->giveBackBook($this->book, $this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
        $this->assertContainsEquals($this->book, $this->books);
        $this->assertContains($this->book, $this->books);
    }

    public function testGiveBackBookWithMoreThan500Pages()
    {
        $invalidBook = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, $this->bookGenre, 300);
        
        $this->expectException(InvalidArgumentException::class);
        $this->returnBookController->giveBackBook($invalidBook, $this->bookDataBase);
    }

}