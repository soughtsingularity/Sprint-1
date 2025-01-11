<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Controller\AddBookController;
use App\Controller\SearchBookController;
use App\DataBases\BookDataBase;
use App\Classes\Book;
use InvalidArgumentException;

class SearchBookControllerTest extends TestCase
{

    protected $bookDataBase;
    protected $addBookController;
    protected $searchBookController;
    protected $books;
    protected $bookTitle;
    protected $bookAuthor;
    protected $bookIsbn;
    protected $bookGenre;
    protected $book;
    
    public function setUp():void
    {
        $this->bookTitle = "La isla del tesoro";
        $this->bookAuthor = "Robert Louis Stevenson";
        $this->bookIsbn = "9788476699676";
        $this->bookGenre = "Aventuras";
        $this->bookDataBase = new BookDatabase();
        $this->addBookController = new AddBookController($this->bookDataBase);
        $this->book = new Book($this->bookTitle, $this->bookAuthor, $this->bookIsbn, $this->bookGenre, 300);
        $this->addBookController->addBook($this->book, $this->bookDataBase);
        $this->searchBookController = new SearchBookController($this->bookDataBase);
        $this->books = $this->searchBookController->getBooks();
    }

    public function testFindBookByTitle()
    {
        $this->assertContainsEquals($this->book, $this->books);
    
        $foundBooks = $this->searchBookController->findBookByTitle($this->bookTitle, $this->bookDataBase);
        $this->assertNotEmpty($foundBooks);
    
        $found = false;
        foreach ($foundBooks as $foundBook) {
            if (
                $foundBook->getBookIsbn() === $this->book->getBookIsbn() &&
                $foundBook->getBookNumPages() === $this->book->getBookNumPages()
            ) {
                $found = true;
                $this->assertEquals($this->book->getBookTitle(), $foundBook->getBookTitle());
                break;
            }
        }
        $this->assertTrue($found);

        $fakeTitle = "Titulo que no existe";
        
        $this->expectException(InvalidArgumentException::class);
        $this->searchBookController->findBookByTitle($fakeTitle, $this->bookDataBase);
    }
    

    public function testFindBookByGenre(){

        $this->assertContainsEquals($this->book, $this->books);

        $foundBooks = $this->searchBookController->findBookByGenre($this->bookGenre, $this->bookDataBase);
        $this->assertNotEmpty($foundBooks);

        $found = false;
        foreach ($foundBooks as $foundBook) {
            if (
                $foundBook->getBookIsbn() === $this->book->getBookIsbn() &&
                $foundBook->getBookNumPages() === $this->book->getBookNumPages()
            ) {
                $found = true;
                $this->assertEquals($this->book->getBookTitle(), $foundBook->getBookTitle());
                break;
            }
        }
        $this->assertTrue($found);


        $fakeGenre = "Genero que no existe";

        $this->expectException(InvalidArgumentException::class);
        $this->searchBookController->findBookByGenre($fakeGenre, $this->bookDataBase);
    }

    public function testFindBookByIsbn()
    {

        $this->assertContainsEquals($this->book, $this->books);

        $foundBooks = $this->searchBookController->findBookByIsbn($this->bookIsbn, $this->bookDataBase);
        $this->assertNotEmpty($foundBooks);

        $found = false;
        foreach ($foundBooks as $foundBook) {
            if ($foundBook->getBookIsbn() === $this->book->getBookIsbn()){
                $found = true;
                $this->assertEquals($this->book->getBookIsbn(), $foundBook->getBookIsbn());
                break;
            }
        }
        $this->assertTrue($found);

        $fakeIsbn = "Isbn que no existe";

        $this->expectException(InvalidArgumentException::class);
        $this->searchBookController->findBookByIsbn($fakeIsbn, $this->bookDataBase);

    }

    public function testFindBookByAuthor()
    {

        $this->assertContainsEquals($this->book, $this->books);

        $foundBooks = $this->searchBookController->findBookByAuthor($this->bookAuthor, $this->bookDataBase);
        $this->assertNotEmpty($foundBooks);

        $found = false;
        foreach ($foundBooks as $foundBook) {
            if (
                $foundBook->getBookIsbn() === $this->book->getBookIsbn() &&
                $foundBook->getBookNumPages() === $this->book->getBookNumPages()
            ) {
                $found = true;
                $this->assertEquals($this->book->getBookAuthor(), $foundBook->getBookAuthor());
                break;
            }
        }
        $this->assertTrue($found);

        $fakeAuthor = "Autor que no existe";

        $this->expectException(InvalidArgumentException::class);
        $this->searchBookController->findBookByAuthor($fakeAuthor, $this->bookDataBase);
    }
}
