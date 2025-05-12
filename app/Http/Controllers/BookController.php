<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }

    public function show($id) {
        $book = Book::with('reviews.user')->findOrFail($id);
        $users = User::all();
        return view('books.show', compact('book', 'users'));
    }
}
