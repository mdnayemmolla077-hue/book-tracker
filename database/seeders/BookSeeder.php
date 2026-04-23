<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $user = \App\Models\User::first(); // Grab your first user

    $books = [
        ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
        ['title' => '1984', 'author' => 'George Orwell'],
        ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
        ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien'],
        ['title' => 'Atomic Habits', 'author' => 'James Clear'],
        // You can add many more here!
    ];

    foreach ($books as $book) {
        $user->books()->create([
            'title' => $book['title'],
            'author' => $book['author'],
            'status' => 'Want to Read',
        ]);
    }
}
}
