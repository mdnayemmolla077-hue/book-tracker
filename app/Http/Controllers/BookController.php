<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
  public function index(Request $request) {
    $query = auth()->user()->books();

    // Search Logic
    $query->when($request->search, function ($q) {
        return $q->where('title', 'like', '%' . request('search') . '%')
                 ->orWhere('author', 'like', '%' . request('search') . '%');
    });

    // Category Filter
    $query->when($request->category, function ($q) {
        return $q->where('category', request('category'));
    });

    // Sorting Logic
    $sort = $request->get('sort', 'created_at');
    $query->orderBy($sort, 'desc');

    $books = $query->paginate(9)->withQueryString(); // Expert: Use pagination

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
  public function fetchDetails($title)
{
    $response = Http::get("https://www.googleapis.com/books/v1/volumes?q=" . urlencode($title));
    
    if ($response->successful()) {
        $bookData = $response->json()['items'][0]['volumeInfo'];
        return [
            'title' => $bookData['title'],
            'author' => $bookData['authors'][0] ?? 'Unknown',
            'image' => $bookData['imageLinks']['thumbnail'] ?? null,
            'description' => $bookData['description'] ?? '',
        ];
    }
}
}