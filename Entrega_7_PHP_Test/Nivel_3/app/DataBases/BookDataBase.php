<?php 

declare(strict_types=1);

namespace App\DataBases;

use App\Classes\Book;
use InvalidArgumentException;

class BookDataBase
{
    protected $books;

    public function __construct()
    {
         $this->books = [
            new Book("El Quijote", "Miguel de Cervantes", "9788491050291", "Aventuras", 1345),
            new Book("Cien años de soledad", "Gabriel García Márquez", "9780307474728", "Fantástico", 417),
            new Book("La sombra del viento", "Carlos Ruiz Zafón", "9788408172177", "Novela Policial", 576),
            new Book("1984", "George Orwell", "9780451524935", "Distopia", 328),
            new Book("Crónica de una muerte anunciada", "Gabriel García Márquez", "9780307387134", "Novela Policial", 122),
            new Book("El nombre del viento", "Patrick Rothfuss", "9788401352835", "Fantástico", 872),
            new Book("La casa de los espíritus", "Isabel Allende", "9788408172177", "Ciencia Ficción", 490),
            new Book("Fahrenheit 451", "Ray Bradbury", "9781451673319", "Distopia", 194),
            new Book("El juego de Ender", "Orson Scott Card", "9780312854027", "Ciencia Ficción", 324),
            new Book("El señor de los anillos", "J.R.R. Tolkien", "9780261102385", "Fantástico", 1216),
            new Book("El principito", "Antoine de Saint-Exupéry", "9780156012195", "Aventuras", 96),
            new Book("La guerra de los mundos", "H.G. Wells", "9780451530653", "Ciencia Ficción", 192),
            new Book("Drácula", "Bram Stoker", "9780486411095", "Fantástico", 418),
            new Book("El código Da Vinci", "Dan Brown", "9780307474278", "Novela Policial", 489),
            new Book("Los juegos del hambre", "Suzanne Collins", "9780439023528", "Ciencia Ficción", 374),
            new Book("La historia interminable", "Michael Ende", "9780140386332", "Fantástico", 396),
            new Book("El Hobbit", "J.R.R. Tolkien", "9780261102217", "Fantástico", 310),
            new Book("La máquina del tiempo", "H.G. Wells", "9780451530707", "Ciencia Ficción", 118),
            new Book("El extraño caso del Dr. Jekyll y Mr. Hyde", "Robert Louis Stevenson", "9780486266886", "Cuento", 144),
            new Book("El perfume", "Patrick Süskind", "9780375725845", "Novela Policial", 255),
            new Book("Dune", "Frank Herbert", "9780441013593", "Ciencia Ficción", 896),
            new Book("La carretera", "Cormac McCarthy", "9780307387899", "Ciencia Ficción", 287),
            new Book("El hombre invisible", "H.G. Wells", "9780451531674", "Ciencia Ficción", 192),
            new Book("El castillo ambulante", "Diana Wynne Jones", "9780061478789", "Fantástico", 429)
         ];
    }

    public function getBooks(){
        return $this->books;
    }

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function deleteBook(int $index)
    {
        unset($this->books[$index]);
        $this->books = array_values($this->books);
    }

    public function updateBook(Book $book)
    {
        foreach ($this->books as $index => $storedBook) {
            if ($storedBook->getBookIsbn() === $book->getBookIsbn()) {
                $this->books[$index] = $book;
                return $book;
            }
        }
        throw new InvalidArgumentException("El libro con el ISBN especificado no se encontró.");
    }
}
