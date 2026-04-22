<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Books
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('books.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
            + Add Book
        </a>

        <div class="mt-6 bg-white p-4 shadow rounded">
            <p>No books yet. (We will connect database next)</p>
        </div>
    </div>
</x-app-layout>