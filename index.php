<?php

include 'Book.php';
include 'Reader.php';
include 'Library.php';

// Создаю библиотеку
$library = new Library();

// Добавляю книги для примера
$book1 = new Book("Лада против феррари", "Михаил Пушкин", 1999);
$book2 = new Book("24 часа в чтз, пособие по выживанию", "Владимир Шишкин", 1960);
$library->addBook($book1);
$library->addBook($book2);

// Добавляю читателя
$reader = new Reader("Данил Романов", "DaRo@gmail.com");
$library->addReader($reader);

// Вывожу информацию о читателе
echo "Читатель: {$reader->getName()}, Email: {$reader->getEmail()}\n";

// Вывожу список всех книг в библиотеке
echo "\nСписок книг в библиотеке:\n";
$library->listBooks();

// Читатель берет книгу
echo "\nЧитатель берет книгу '1984':\n";
$reader->borrowBook($book1);

// Вывожу список книг после взятия
echo "\nСписок книг после взятия:\n";
$library->listBooks();

// Вывожу информацию о взятых книгах читателя
echo "\nКниги, взятые читателем:\n";
foreach ($reader->getBorrowedBooks() as $borrowedBook) {
    echo "- {$borrowedBook->getTitle()} ({$borrowedBook->getAuthor()}, {$borrowedBook->getYear()})\n";
}

// Читатель возвращает книгу
echo "\nЧитатель возвращает книгу '1984':\n";
$reader->returnBook($book1);

// Вывожу список книг после возврата
echo "\nСписок книг после возврата:\n";
$library->listBooks();

// Вывожу информацию о взятых книгах читателя после возврата
echo "\nКниги, взятые читателем после возврата:\n";
if (empty($reader->getBorrowedBooks())) {
    echo "Читатель не имеет взятых книг.\n";
} else {
    foreach ($reader->getBorrowedBooks() as $borrowedBook) {
        echo "- {$borrowedBook->getTitle()} ({$borrowedBook->getAuthor()}, {$borrowedBook->getYear()})\n";
    }
}
