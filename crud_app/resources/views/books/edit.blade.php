<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Book # {{$book->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('books.update',['book'=>$book]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" value="Titel">Title</label>
                                <input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$book->title}}" required>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="author" value="Author">
                                    <input id="author" class="block mt-1 w-full" type="text" name="author" value="{{$book->author}}" required>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="icon" value="Icon">Old Image</label><br>
                                <img src="{{ asset('storage/images/' . $book->photo) }}" alt="Previous Image" style="max-width: 200px;">
                                <input id="icon" class="block mt-1 w-full" type="file" name="icon" required>
                            </div>
                            <div class="flex col-span-6 justify-end">
                                <button>
                                    Update book
                                </button>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('books.destroy',['book'=>$book]) }}">
                        @csrf
                        @method('DELETE')
                        <div class="flex col-span-6 justify-end">
                            <button>
                                Delete book
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
