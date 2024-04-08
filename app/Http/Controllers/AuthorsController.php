<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'biography' => 'required|string',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('img_path')) {
            $image = $request->file('img_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images/authors', $imageName);
        }

        $author = new Author([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'biography' => $request->biography,
            'img_path' => $imageName ?? null,
        ]);

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
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'biography' => 'required|string'
        ]);
        $author = Author::find($id);

        if ($request->hasFile('img_path')) {
            $image = $request->file('img_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images/authors', $imageName);
        }

        $author->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'biography' => $request->biography,
            'img_path' => $imageName ?? $author->img_path,
        ]);

        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}
