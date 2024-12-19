<?php 

declare(strict_types=1);

namespace App\Classes;

class Book
{
    protected $title;
    protected $author;
    protected $isbn;
    protected $genre;
    protected int $numPages;
    protected static $allowedGenres = ["Aventuras", "Ciencia Ficción", "Cuento", "Novela Policial", "Paranormal", "Distopia", "Fantástico"];

    public function __construct($title, $author, $isbn, $genre, $numPages)
    {

        if (!is_string($title)) {
            throw new \InvalidArgumentException("El dato 'Titulo' debe ser de tipo String");
        }
        $this->title = $title;

        if (!is_string($author)) {
            throw new \InvalidArgumentException("El dato 'Author' debe ser de tipo String");
        }
        $this->author = $author;

        if (!is_string($isbn)) {
            throw new \InvalidArgumentException("El dato 'ISBN' debe ser de tipo String");
        }
        $this->isbn = $isbn;

        if (!is_string($genre)) {
            throw new \InvalidArgumentException("El dato 'Genre' debe ser de tipo String");
        }
        if (!in_array($genre, self::$allowedGenres)) {
            throw new \InvalidArgumentException("El genero del libro no es soportado");
        }
        $this->genre = $genre;

        if (!is_int($numPages)) {
            throw new \InvalidArgumentException("El dato 'Numero de páginas' debe ser de tipo int");
        }
        $this->numPages = $numPages;
    }

    public function getBookTitle(): string
    {
        return $this->title;
    }

    public function getBookAuthor(): string
    {
        return $this->author;
    }

    public function getBookIsbn(): string
    {
        return $this->isbn;
    }

    public function getBookGenre(): string
    {
        return $this->genre;
    }

    public function getBookNumPages(): int
    {
        return $this->numPages;
    }

    public function setBookTitle(string $bookTitle): void
    {
        $this->title = $bookTitle;
    }

    public function setBookAuthor(string $bookAuthor): void
    {
        $this->author = $bookAuthor;
    }

    public function setBookIsbn(string $bookIsbn): void
    {
        $this->isbn = $bookIsbn;
    }

    public function setBookNumPages(int $bookNumPages): void
    {
        $this->numPages = $bookNumPages;
    }

    public function setBookGenre(string $bookGenre): void
    {
        $this->genre = $bookGenre;
    }

    public function toString()
    {
        return "Titulo: " . $this->getBookTitle() . ", " .
               "Autor: " . $this->getBookAuthor() . ", " .
               "Genero: " . $this->getBookGenre() . ", " .
               "ISBN: " . $this->getBookIsbn() . ", " .
               "Número de páginas: " . $this->getBookNumPages() . ".";
    }
}
