<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Classes\Book;
use InvalidArgumentException;

class BookTest extends TestCase
{
    public function testValidBookCreation(): void
    {
        $book = new Book("Title", "Author", "9781234567890", "Aventuras", 300);

        $this->assertSame("Title", $book->getBookTitle());
        $this->assertSame("Author", $book->getBookAuthor());
        $this->assertSame("9781234567890", $book->getBookIsbn());
        $this->assertSame("Aventuras", $book->getBookGenre());
        $this->assertSame(300, $book->getBookNumPages());
    }

    public function testInvalidTitleThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Book(123, "Author", "9781234567890", "Aventuras", 300);
    }

    public function testInvalidAuthorThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Book("Title", 123, "9781234567890", "Aventuras", 300);
    }

    public function testInvalidGenreThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Book("Title", "Author", "9781234567890", 300, 300);
    }

    public function testInvalidAllowedGenreThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Book("Title", "Author", "9781234567890", "Otro genero", 300);
    }

    public function testInvalidNumPagesThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Book("Title", "Author", "9781234567890", "Aventuras", "300");

    }

    public function testInvalidIsbnThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Book("Title", "Author", 9781234567890, "Aventuras", 300);
    }

    public function testBookToString(){

        $book = new Book("The Great Gatsby", "F. Scott Fitzgerald", "9780743273565", "Aventuras", 180);

        $toString = $book->toString();

        $expectedToString = "Titulo: The Great Gatsby, " .
                    "Autor: F. Scott Fitzgerald, " .
                    "Genero: Aventuras, " .
                    "ISBN: 9780743273565, " .
                    "Número de páginas: 180.";

        $this->assertEquals($expectedToString, $toString);
    }
}
