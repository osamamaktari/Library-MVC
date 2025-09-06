<?php
namespace App\Model;

class Book {
    public int $id;
    public string $title;
    public string $author;
    public float $price;
    public string $category;

    public function __construct($id, $title, $author, $price, $category) {
        $this->id       = $id;
        $this->title    = $title;
        $this->author   = $author;
        $this->price    = $price;
        $this->category = $category;
    }

  
    public static function all(): array {
        return [
            new Book(1, "PHP for Beginners", "John Doe", 20, "Programming"),
            new Book(2, "Laravel Deep Dive", "Jane Smith", 30, "Programming"),
            new Book(3, "History of Yemen", "Ali Ahmed", 15, "History"),
            new Book(4, "Advanced JS", "Sara Khan", 25, "Programming"),
        ];
    }

    public static function search(string $keyword, string $category = null): array {
        $results = [];
        foreach (self::all() as $book) {
            if (stripos($book->title, $keyword) !== false || stripos($book->author, $keyword) !== false) {
                if ($category && strtolower($book->category) !== strtolower($category)) {
                    continue;
                }
                $results[] = $book;
            }
        }
        return $results;
    }
}
