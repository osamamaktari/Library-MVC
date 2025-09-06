<?php
namespace App\Controllers;
use App\Model\Book;

class BookController {
    public function index() {
        $books = Book::all();
        include __DIR__ . '/../views/books/index.php';
    }

    public function search() {
        $keyword  = $_GET['q'] ?? '';
        $category = $_GET['category'] ?? null;
        $books = Book::search($keyword, $category);
        include __DIR__ . '/../views/books/search.php';
    }
}
