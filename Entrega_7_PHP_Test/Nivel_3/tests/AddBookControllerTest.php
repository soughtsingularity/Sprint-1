<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Controller\AddBookController;
use App\Controller\SearchBookController;
use App\DataBases\BookDataBase;
use App\Classes\Book;
use InvalidArgumentException;

class AddBookControllerTest extends TestCase
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

    public function setUp(): void
    {
        $this->bookDataBase = new BookDataBase();
        $this->searchBookController = new SearchBookController($this->bookDataBase);
        $this->addBookController = new AddBookController($this->bookDataBase);
        $this->bookTitle = "La isla del tesoro";
        $this->bookAuthor = "Robert Louis Stevenson";
        $this->bookIsbn = "9788476699676";
        $this->bookGenre = "Aventuras";
        $this->bookNumPages = 300;
        $this->book = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, $this->bookGenre, $this->bookNumPages);
        $this->addBookController->addBook($this->book, $this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
        $this->assertContainsEquals($this->book, $this->books);
    }

    public function testAddValidBook(){

        $book1 = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, $this->bookGenre, $this->bookNumPages);

        $this->addBookController->addBook($book1, $this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
        $this->assertContainsEquals($book1, $this->books);
    }

    public function testCheckInvalidBookIsbnTitle(): void
    {
        $book2 = new Book("Otro titulo", $this->bookAuthor, $this->bookIsbn, $this->bookGenre, $this->bookNumPages);
    
        $foundMismatch = false;
    
        foreach ($this->books as $book) {
            if ($book->getBookIsbn() === $book2->getBookIsbn()) {
                if ($book->getBookTitle() !== $book2->getBookTitle()) {
                    $foundMismatch = true;
                }
            }
        }
    
        $this->assertTrue($foundMismatch);
        
        $this->expectException(InvalidArgumentException::class);
        $this->addBookController->addBook($book2, $this->bookDataBase);
    }

    public function testCheckInvalidBookIsbnAuthor(): void
    {
        $book3 = new Book($this->bookTitle, "Otro autor", $this->bookIsbn, $this->bookGenre, $this->bookNumPages);    
        $foundMismatch = false;
         
        foreach ($this->books as $book) {
            if ($book->getBookIsbn() === $book3->getBookIsbn()) {
                if ($book->getBookAuthor() !== $book3->getBookAuthor()) {
                    $foundMismatch = true;
                }
            }
        }
    
        $this->assertTrue($foundMismatch);

        $this->expectException(InvalidArgumentException::class);
        $this->addBookController->addBook($book3, $this->bookDataBase);
    }
    

    public function testCheckInvalidBookIsbnGenre(): void
    {
        $book4 = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, "Ciencia Ficción", $this->bookNumPages);
    
        $foundMismatch = false;
    
        foreach ($this->books as $book) {
            if ($book->getBookIsbn() === $book4->getBookIsbn()) {
                if ($book->getBookGenre() !== $book4->getBookGenre()) {
                    $foundMismatch = true;
                }
            }
        }
        $this->assertTrue($foundMismatch);

        $this->expectException(InvalidArgumentException::class);
        $this->addBookController->addBook($book4, $this->bookDataBase);
    }
    

    public function testCheckInvalidBookIsbnNumPages(): void
    {
        $book5 = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, $this->bookGenre, 456);
    
        $foundMismatch = false;
    
        foreach ($this->books as $book) {
            if ($book->getBookIsbn() === $book5->getBookIsbn()) {
                if ($book->getBookNumPages() !== $book5->getBookNumPages()) {
                    $foundMismatch = true;
                }
            }
        }
    
        $this->assertTrue($foundMismatch);

        $this->expectException(InvalidArgumentException::class);
        $this->addBookController->addBook($book5, $this->bookDataBase);
    }

    public function testAddBookWithNegativePagesThrowsException(): void
    {
        $invalidBook = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, $this->bookGenre, -25);

        $this->expectException(InvalidArgumentException::class);
        $this->addBookController->addBook($invalidBook, $this->bookDataBase);
    }
    
}
