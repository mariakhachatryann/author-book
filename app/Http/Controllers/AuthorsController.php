<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::paginate(5);
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('authors.form', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreAuthorRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('img_path')) {
            $image = $request->file('img_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images/authors', $imageName);
            $validated['img_path'] = $imageName;
        }

        $author = new Author();
        $author->fill($validated);

        $author->save();
        return redirect()->route('authors.index')->with('success', 'Author added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::find($id);
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::find($id);
        return view('authors.form', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, string $id)
    {
        $validated = $request->validated();
        $author = Author::find($id);

        if ($request->hasFile('img_path')) {
            $image = $request->file('img_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images/authors', $imageName);
            $validated['img_path'] = $imageName;
        } else {
            $validated['img_path'] = $author->img_path;
        }

        $author->update($validated);
        return redirect()->route('authors.index')->with('success', 'Author edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully');
    }
}
