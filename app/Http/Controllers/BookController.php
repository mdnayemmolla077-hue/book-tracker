<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index() {
    // WRONG: Book::all(); (Shows everyone's books)
    // RIGHT: Only shows books for the logged-in user
    $books = auth()->user()->books; 
    return view('books.index', compact('books'));
}

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->user()->books()->create($request->all());
     return redirect()->route('books.index');

        $request->user()->books()->create([
    'title' => $request->title,
    'author' => $request->author,
    'status' => 'reading',
         ]);

        return redirect()->route('books.index');
    }

     public function destroy(Book $book)
   {
    $book->delete();

    return redirect()->route('books.index');
    }
    public function edit(Book $book)
    {
    if ($book->user_id !== auth()->id()) {
        abort(403, 'Unauthorized action.');
    }
    return view('books.edit', compact('book'));
}

    public function update(Request $request, Book $book)
  {
    $request->validate([
        'title' => 'required',
        'author' => 'required',
        'status' => 'required',
    ]);

    $book->update($request->all());

    return redirect()->route('books.index');
  }
}