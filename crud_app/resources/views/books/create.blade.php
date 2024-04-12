<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Book
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" value="Title">Title</label>
                                <input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label for="author" value="Author">Author</label>
                                    <input id="author" class="block mt-1 w-full" type="text" name="author" :value="old('author')" required>
                            </div>
                             <div class="col-span-6 sm:col-span-2">
                                <label for="icon" value="Icon"></label>
                                    <input id="icon" class="block mt-1 w-full" type="file" name="icon"  required>
                            </div>
                            <div class="flex col-span-6 justify-end">
                                <button>
                                    Create Book
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>