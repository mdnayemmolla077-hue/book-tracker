<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    + Add Book
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if($books->count())
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b">
                                <th class="py-2">Title</th>
                                <th class="py-2">Author</th>
                                <th class="py-2">Status</th>
                                <th class="py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3">{{ $book->title }}</td>
                                    <td class="py-3">{{ $book->author }}</td>
                                    <td class="py-3">
                                        <span class="px-2 py-1 rounded text-xs {{ $book->status == 'Completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $book->status }}
                                        </span>
                                    </td>
                                    <td class="py-3 flex gap-2">
                                        <a href="{{ route('books.edit', $book->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        
                                        <form method="POST" action="{{ route('books.destroy', $book->id) }}" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 hover:text-red-900">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-gray-500 text-center">No books yet. Add one!</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>