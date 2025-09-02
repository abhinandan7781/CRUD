<x-layout>
  <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <form action="{{ route('book.update', $book->id) }}" method="POST" class="space-y-6">
      @csrf
      @method('PUT')

      <h2 class="text-2xl font-bold mb-6 text-center">Edit Book</h2>

      <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Book Title:</label>
        <input 
          type="text" 
          id="title" 
          name="title" 
          value="{{ old('title', $book->title) }}"
          required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
        >
      </div>

      <div>
        <label for="author" class="block text-sm font-medium text-gray-700">Author:</label>
        <input 
          type="text" 
          id="author" 
          name="author" 
          value="{{ old('author', $book->author) }}"
          required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
        >
      </div>

      <div>
        <label for="published_year" class="block text-sm font-medium text-gray-700">Published Year:</label>
        <input 
          type="number" 
          id="published_year" 
          name="published_year" 
          value="{{ old('published_year', $book->published_year) }}"
          required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
        >
      </div>

      <div>
        <label for="genre" class="block text-sm font-medium text-gray-700">Genre:</label>
        <input 
          type="text" 
          id="genre" 
          name="genre" 
          value="{{ old('genre', $book->genre) }}"
          required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
        >
      </div>

      <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Price:</label>
        <input 
          type="number" 
          step="0.01" 
          id="price" 
          name="price" 
          value="{{ old('price', $book->price) }}"
          required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
        >
      </div>

      <div>
        <label for="library_id" class="block text-sm font-medium text-gray-700">Library:</label>
        <select 
          id="library_id" 
          name="library_id" 
          required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
        >
        {{-- //dropdown to select library from already present libraries --}}
          @foreach ($libraries as $library)
            <option value="{{ $library->id }}" {{ $book->library_id == $library->id ? 'selected' : '' }}>
              {{ $library->name }}
            </option>
          @endforeach
        </select>
      </div>
      {{-- //button to submit the form or cancel ya toh go back to book details page --}}
      <div class="flex space-x-4 justify-center">
        
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
          Update Book
        </button>
        <a href="{{ route('book.show', $book->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
          Cancel
        </a>
      </div>

      @if ($errors->any())
        <div class="mt-4 bg-red-50 text-red-500 p-4 rounded-lg">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </form>
  </div>
</x-layout>
