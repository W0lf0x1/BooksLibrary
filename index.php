<?php
//Привязываю сюда классы
include 'Book.php';
include 'Reader.php';
include 'Library.php';

//Создаю библиотеку
$library = new Library();
//Добавляю книги для примера
$book1 = new Book("Лада против феррари", "Михаил Пушкин", 1999);
$book2 = new Book("24 часа в чтз, пособие по выживанию", "Владимир Шишкин", 1960);
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
