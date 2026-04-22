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

    @if($books->count())
        <table class="w-full">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->status }}</td>
                <td class="p-2 flex gap-2">

    <a href="{{ route('books.edit', $book->id) }}" 
       class="bg-yellow-500 text-white px-3 py-1 rounded">
        Edit
    </a>

    <form method="POST" action="{{ route('books.destroy', $book->id) }}">
        @csrf
        @method('DELETE')

        <button 
            onclick="return confirm('Are you sure?')" 
            class="bg-red-500 text-white px-3 py-1 rounded">
            Delete
        </button>
    </form>

      </td>
            </tr>
            @endforeach
        </table>
    @else
        <p>No books yet. Add one!</p>
    @endif

</div>
    </div>
</x-app-layout>