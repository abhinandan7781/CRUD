<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\LIbrary;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    //showing all on the index page
    public function index(){
        $books = Book::with('library')->orderBy('published_year', 'desc')->paginate(12);

        return view('library.index', ["books" => $books]);
    }

    //showing one book detail
    public function show(Book $book){
        $book->load('library');
        return view('library.show', ["book" => $book]);
    }

    //showing create forum 
    public function create(){
        $libraries = LIbrary::all();
        return view('library.create', ["libraries" => $libraries]);
    }

    //storing book data after validation and redirecting to index page with success message 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'author'         => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre'          => 'required|string|max:100',
            'price'          => 'required|numeric|min:0',
            'library_id'     => 'required|exists:l_ibraries,id', 
        ]);

        Book::create($validated);

        return redirect()->route('book.index')->with('success', 'Book created successfully!');
    }   

    //showing edit form with existing book data and libraries list
    public function edit(Book $book)
    {
        $libraries = LIbrary::all();
        return view('library.edit', [
            "book" => $book,
            "libraries" => $libraries
        ]);
    }

    //updating book data after validation and redirecting to index page with success message
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'author'         => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre'          => 'required|string|max:100',
            'price'          => 'required|numeric|min:0',
            'library_id'     => 'required|exists:l_ibraries,id',
        ]);

        $book->update($validated);

        return redirect()->route('book.index')->with('success', 'Book updated successfully!');
    }

    //deleting book and redirecting to index page with success message
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('book.index')->with('success','Book Removed!');
    }


}
