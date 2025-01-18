<?php
//Привязываю сюда классы
include 'Book.php';
include 'Reader.php';
include 'Library.php';

//Создаю библиотеку
$library = new Library();
//Добавляю книги для примера
$book1 = new Book("1988", "Лада против феррари", 1999);
$book2 = new Book("1955", "24 часа в чтз, пособие по выживанию", 1960);
$library->addBook($book1);
$library->addBook($book2);
//Добавляю читателя
$reader = new Reader("Данил Романов", "DaRo@gmail.com");
$library->addReader($reader);
//Читатель берет книгу
$reader->borrowBook($book1);
//Список книг в библиотеке
$library->listBooks();
//Читатель возвращает книгу
$reader->returnBook($book1);
//Список книг после возврата
$library->listBooks();
