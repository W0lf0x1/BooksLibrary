<?php

class Reader {
    private $name;
    private $email;
    private $borrowedBooks;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
        $this->borrowedBooks = [];
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function borrowBook($book) {
        if ($book->getAvailability()) {
            $this->borrowedBooks[] = $book;
            $book->setAvailability(false);
            echo "Книга '{$book->getTitle()}' взята на чтение.\n";
        } else {
            echo "Книга '{$book->getTitle()}' недоступна.\n";
        }
    }
    public function getBorrowedBooks() {
        return $this->borrowedBooks;
    }

    public function returnBook($book) {
        $index = array_search($book, $this->borrowedBooks);
        if ($index !== false) {
            array_splice($this->borrowedBooks, $index, 1);
            $book->setAvailability(true);
            echo "Книга '{$book->getTitle()}' возвращена.\n";
        } else {
            echo "Эта книга не была взята вами.\n";
        }
    }
}
