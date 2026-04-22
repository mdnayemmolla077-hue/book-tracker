<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Book
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">

        <form method="POST" action="{{ route('books.store') }}">
            @csrf

            <div>
                <label>Title</label>
                <input type="text" name="title" class="border p-2 w-full">
            </div>

            <div class="mt-4">
                <label>Author</label>
                <input type="text" name="author" class="border p-2 w-full">
            </div>

            <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">
                Save
            </button>

        </form>

    </div>
</x-app-layout>