<x-layout>
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-xl shadow-lg p-8 mb-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $book->title ?? 'No Title Available' }}</h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">📚 Book Details</h3>
                    <p class="flex items-center text-gray-700">
                        <span class="font-medium mr-2">✍️ Author:</span>
                        {{ $book->author ?? 'Unknown' }}
                    </p>
                    <p class="flex items-center text-gray-700">
                        <span class="font-medium mr-2">📅 Published Year:</span>
                        {{ $book->published_year ?? 'N/A' }}
                    </p>
                    <p class="flex items-center text-gray-700">
                        <span class="font-medium mr-2">📚 Genre:</span>
                        {{ $book->genre }}
                    </p>
                    <p class="flex items-center text-gray-700">
                        <span class="font-medium mr-2">💰 Price:</span>
                        ${{ number_format($book->price, 2) }}
                    </p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">🏛️ Library Information</h3>
                    @if($book->library)
                        <p class="flex items-center text-gray-700">
                            <span class="font-medium mr-2">📍 Library Name:</span>
                            {{ $book->library->name ?? 'N/A' }}
                        </p>
                        <p class="flex items-center text-gray-700">
                            <span class="font-medium mr-2">🗺️ Location:</span>
                            {{ $book->library->location ?? 'N/A' }}
                        </p>
                    @else
                        <p class="text-gray-500 italic">This book is not associated with any library.</p>
                    @endif
                </div>
            </div>

            <div class="mt-8 flex space-x-4">
                <a href="{{ route('book.edit', $book->id) }}" class="btn-primary">
                    ✏️ Edit Book
                </a>
                <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            onclick="return confirm('Are you sure you want to delete this book? This action cannot be undone.')" 
                            class="btn-danger">
                        🗑️ Delete Book
                    </button>
                </form>
                <a href="{{ route('book.index') }}" class="btn-secondary">
                    👈 Back to List
                </a>
            </div>
        </div>
    </div>
</x-layout>
