<?php

class Book {
    private $title;
    private $author;
    private $year;
    private $isAvailable;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isAvailable = true;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getYear() {
        return $this->year;
    }
    public function getAvailability() {
        return $this->isAvailable;
    }
    public function setAvailability($status) {
        $this->isAvailable = $status;
    }
}
