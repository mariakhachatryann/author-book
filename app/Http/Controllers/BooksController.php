<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;

class BooksController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(8);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('books.form', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('img_path')) {
            $image = $request->file('img_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images/books', $imageName);
            $validated['img_path'] = $imageName;
        }

        $book = new Book();
        $book->fill($validated);
        $book->save();

        $book->authors()->attach($validated['authors']);
        return redirect()->route('books.index')->with('success', 'Book added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        $authors = Author::all();
        return view('books.form', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, string $id)
    {
        $validated = $request->validated();

        $book = Book::find($id);

        if ($request->hasFile('img_path')) {
            $image = $request->file('img_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images/books', $imageName);
            $validated['img_path'] = $imageName;
        }

        $book->update($validated);
        $book->authors()->sync($request->authors);
        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
