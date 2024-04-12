<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Book List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-nav-link :href="route('books.create')">
                        Create Book
                    </x-nav-link>
                </div>
            </div>
            <div class="mt-4">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 dark:bg-gray-900">
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Book Name</th>
                            <th class="px-4 py-2">Author</th>
                            <th class="px-4 py-2">Image</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($books as $book)
                        <tr>
                            <td class="border px-4 py-2">{{ $book->id }}</td>
                            <td class="border px-4 py-2">{{ $book->title }}</td>
                            <td class="border px-4 py-2">{{ $book->author }}</td>
                            <td class="border px-4 py-2">
                                <img src="{{ asset('storage/images/' . $book->photo) }}" style="height: 40%; width: 50%;" alt="Book Cover">
                            </td>
                            <td class="border px-4 py-2" style="display: flex; justify-content: space-between; align-items: center;">
                                <div style="display: inline-block; height: 32px; width: 70px; border-radius: 5px; background-color: blue; color: white;">
                                    <a href="{{ route('books.edit', ['book' => $book]) }}" style="text-decoration: none; display: flex; justify-content: center; align-items: center; height: 100%;">Edit</a>
                                </div>
                                <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
