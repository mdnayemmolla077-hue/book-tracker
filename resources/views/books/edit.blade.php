<x-app-layout>
    <x-slot name="header">
        <h2>Edit Book</h2>
    </x-slot>

    <div class="p-6 max-w-xl mx-auto">

        <form method="POST" action="{{ route('books.update', $book->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{ $book->title }}" class="border p-2 w-full mb-3" />
            <input type="text" name="author" value="{{ $book->author }}" class="border p-2 w-full mb-3" />

            <select name="status" class="border p-2 w-full mb-3">
                <option value="reading" {{ $book->status == 'reading' ? 'selected' : '' }}>Reading</option>
                <option value="completed" {{ $book->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>

            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Update
            </button>

        </form>

    </div>
</x-app-layout>