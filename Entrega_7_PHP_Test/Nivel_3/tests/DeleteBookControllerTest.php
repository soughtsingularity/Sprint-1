<?php 
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Controller\AddBookController;
use App\Controller\SearchBookController;
use App\DataBases\BookDataBase;
use App\Classes\Book;
use App\Controller\DeleteBookController;
use Exception;

class DeleteBookControllerTest extends TestCase
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
    protected $deleteBookController;

    public function setUp(): void
    {
        $this->bookDataBase = new BookDataBase();
        $this->bookTitle = "La isla del tesoro";
        $this->bookAuthor = "Robert Louis Stevenson";
        $this->bookIsbn = "9788476699676";
        $this->bookGenre = "Aventuras";
        $this->bookNumPages = 300;
        $this->book = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, $this->bookGenre, $this->bookNumPages);
        $this->searchBookController = new SearchBookController($this->bookDataBase);
        $this->addBookController = new AddBookController($this->bookDataBase);
        $this->deleteBookController = new DeleteBookController($this->bookDataBase);
        $this->addBookController->addBook($this->book, $this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
    }

    public function testDeleteBookOk()
    {
        $this->books = $this->searchBookController->getBooks();
        $this->assertContainsEquals($this->book, $this->books);
 
        $this->deleteBookController->deleteBook($this->book, $this->bookDataBase); 
    
        $this->books = $this->searchBookController->getBooks();
        $this->assertNotContainsEquals($this->book, $this->books);
    }

    public function testDeleteNonExistentBook()
    {

        $nonExistentBook = new Book("Titulo inexistente", "Autor inexistente", "0192347839289", "Aventuras", 100);
        
        $this->expectException(Exception::class);
        $this->deleteBookController->deleteBook($nonExistentBook, $this->bookDataBase);
    }
}
