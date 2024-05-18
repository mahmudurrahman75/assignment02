<?php

//Assignment-02

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available for '{$this->title}' \n";
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        $book->borrowBook();
    }

    public function returnBook($book) {
        $book->returnBook();
    }
}

$book01 = new Book("The Great Gatsby", 5);
$book02 = new Book("To Kill a Mockingbird", 3);


$member01 = new Member("John Doe");
$member02 = new Member("Jane Smith");


$member01->borrowBook($book01);
$member02->borrowBook($book02);


echo "Available Copies of '{$book01->getTitle()}': {$book01->getAvailableCopies()}\n";
echo "Available Copies of '{$book02->getTitle()}': {$book02->getAvailableCopies()}\n";