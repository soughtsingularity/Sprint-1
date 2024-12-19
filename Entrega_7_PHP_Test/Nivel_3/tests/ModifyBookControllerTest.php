<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Controller\AddBookController;
use App\Controller\SearchBookController;
use App\DataBases\BookDataBase;
use App\Classes\Book;
use App\Controller\ModifyBookController;
use InvalidArgumentException;

class ModifyBookControllerTest extends TestCase {

    protected $bookDataBase;
    protected $addBookController;
    protected $searchBookController;
    protected $books;
    protected $bookTitle1;
    protected $bookAuthor1;
    protected $bookIsbn1;
    protected $bookGenre1;
    protected $bookNumPages1;
    protected $bookTitle2;
    protected $bookAuthor2;
    protected $bookIsbn2;
    protected $bookGenre2;
    protected $bookNumPages2;
    protected $book;
    protected $modifyBookController;

    public function setUp(): void 
    {
        $this->bookDataBase = new BookDataBase();
        $this->bookTitle1 = "La isla del tesoro";
        $this->bookAuthor1 = "Robert Louis Stevenson";
        $this->bookIsbn1 = "9788476699676";
        $this->bookGenre1 = "Aventuras";
        $this->bookNumPages1 = 300;
        $this->bookTitle2 = "La isla del tesoro";
        $this->bookAuthor2 = "Robert Louis Stevenson";
        $this->bookIsbn2 = "9788476699676";
        $this->bookGenre2 = "Aventuras";
        $this->bookNumPages2 = 300;
        $this->searchBookController = new SearchBookController($this->bookDataBase);
        $this->modifyBookController = new ModifyBookController($this->bookDataBase);
        $this->addBookController = new AddBookController($this->bookDataBase);
        $this->book = new Book($this->bookTitle1, $this->bookAuthor1, $this->bookIsbn1, $this->bookGenre1, $this->bookNumPages1);
    }

    public function testValidModify(): void
    {

        $newData = new Book($this->bookTitle2, $this->bookAuthor2, $this->bookIsbn2, $this->bookGenre2, $this->bookNumPages2);
        
        $this->addBookController->addBook($this->book, $this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
        $this->assertContainsEquals($this->book, $this->books);
        $this->modifyBookController->modifyBookByIsbn($this->book->getBookIsbn(), $newData, $this->bookDataBase);
        $updatedBook = $this->modifyBookController->modifyBookByIsbn($this->book->getBookIsbn(), $newData, $this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
        $this->assertContainsEquals($this->book, $this->books);

        $this->assertSame($this->bookTitle2, $updatedBook->getBookTitle());
        $this->assertSame($this->bookAuthor2, $updatedBook->getBookAuthor());
        $this->assertSame($this->bookIsbn2, $updatedBook->getBookIsbn());
        $this->assertSame($this->bookGenre2, $updatedBook->getBookGenre());
        $this->assertSame($this->bookNumPages2, $updatedBook->getBookNumPages());
    }

    public function testModifyBookWithMissingIsbn()
    {
        $newData = new Book($this->bookTitle2, $this->bookAuthor2, $this->bookIsbn2, $this->bookGenre2, $this->bookNumPages2);

        $fakeIsbn = "Isbn que no esta en la base de datos";

        $this->expectException(InvalidArgumentException::class);
        $this->modifyBookController->modifyBookByIsbn($fakeIsbn, $newData, $this->bookDataBase);
    }

    public function testAddBookWithNegativePagesThrowsException(): void
    {
        $newData = new Book($this->bookTitle2, $this->bookAuthor2, $this->bookIsbn2, $this->bookGenre2, -25);

        $this->expectException(InvalidArgumentException::class);
        $this->modifyBookController->modifyBookByIsbn($this->bookIsbn2, $newData, $this->bookDataBase);
    }


}