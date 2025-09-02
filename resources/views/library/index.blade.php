<x-layout>
    <div class="max-w-7xl mx-auto">
        <h2 class="page-header">📚 Currently Available Books</h2>
        
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($books as $book)
            <x-card href="{{ route('book.show', $book->id) }}">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $book->title }}</h3>
                    <div class="space-y-2 text-gray-600">
                        <p class="flex items-center">
                            <span class="font-medium mr-2">✍️ Author:</span> 
                            {{ $book->author }}
                        </p>
                        <p class="flex items-center">
                            <span class="font-medium mr-2">📅 Published:</span>
                            {{ $book->published_year }}
                        </p>
                        @if($book->library)
                            <p class="flex items-center">
                                <span class="font-medium mr-2">🏛️ Library:</span>
                                {{ $book->library->name }}
                            </p>
                        @endif
                        <p class="flex items-center">
                            <span class="font-medium mr-2">💰 Price:</span>
                            ${{ number_format($book->price, 2) }}
                        </p>
                    </div>
                </div>
            </x-card>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $books->links() }}
        </div>
    </div>
</x-layout>
