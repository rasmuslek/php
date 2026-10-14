<?php

// Your code here
class Book
{
    private $title;
    private $author;
    private $year;
    private $price;

    public function __construct($title, $author, $year, $price)
    {
        if ($year < 1000 && $year > 2024) {
            throw new Exception("Year must be between 1000 and 2024.");
        }

        if ($price < 0) {
            throw new Exception("Price must be a positive value.");
        }

        $this->year = $year;
        $this->price = $price;
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo(){
        return $this->title . " by " . $this->author . " (" . $this->year . ") - $" . $this->price;
    }
}

$book = new Book("Clean Code", "Robert C. Martin", 2008, 39.99);
echo $book->getInfo(); // Clean Code by Robert C. Martin (2008) - $39.99