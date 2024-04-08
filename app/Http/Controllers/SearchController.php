<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $books = Book::where('title', 'like', '%' . $query . '%')
            ->orWhereHas('authors', function($authorQuery) use ($query) {
                $authorQuery->where('first_name', 'like', '%' . $query . '%')
                    ->orWhere('last_name', 'like', '%' . $query . '%');
            })
            ->get();

        $authors = Author::where('first_name', 'like', '%'.$query.'%')
            ->orWhere('last_name', 'like', '%'.$query.'%')
            ->get();

        return view('searchRes', compact('query', 'authors', 'books'));
    }
}
