<x-layout>
  {{-- //form for creating a new book with fields for title, author, published year, genre, price, and library selection --}}
  <form action="{{ route('book.store') }}" method="POST" class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md space-y-4">
    @csrf
    {{-- //csrf token for security --}}

    <h2 class="text-center text-xl">Add a New Book</h2>

    <label for="title" >Book Title:</label>
    <input 
      type="text" 
      id="title" 
      name="title" 
      required
      class="outline w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
    >

    <label for="author">Author:</label>
    <input 
      type="text" 
      id="author" 
      name="author" 
      required
      class="outline w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"

    >
    <label for="published_year">Published Year:</label>
    <input 
      type="number" 
      id="published_year" 
      name="published_year" 
      required  
      class="outline w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"

    >

    <label for="genre">Genre:</label>
    <input 
      type="text" 
      id="genre" 
      name="genre" 
      required
      class="outline w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"

    >

    <label for="price">Price:</label>
    <input 
      type="number" 
      step="0.01" 
      id="price" 
      name="price" 
      class="outline w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"

      required
    >

    {{-- //dropdown to select library from existing libraries --}}
    <label for="library_id">Library:</label>
    <select id="library_id" name="library_id" required class="outline w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option value="" disabled selected>Select a library</option>
      @foreach ($libraries as $library)
        <option value="{{ $library->id }}">
          {{ $library->name }}
        </option>
      @endforeach
    </select>
    <div class="flex justify-center mt-4">
    <button type="submit" class="btn">Create Book</button>
</div>


  {{-- //display validation errors if any --}}
    @if ($errors->any())
      <div class="mt-2 text-red-600">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </form>
</x-layout>
