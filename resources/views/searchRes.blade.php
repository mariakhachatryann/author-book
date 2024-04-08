<x-layout title="Search Results">
    <header>
        <h1>Search Results</h1>
        <p>Showing results for: <strong>{{ $query }}</strong></p>
    </header>

    <section id="books">
        <h2>Books</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($books as $book)
                <div class="col">
                    <div class="card h-100 shadow">
                        <img src="{{ asset('storage/images/books/' . $book->img_path) }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">{{ $book->title }}</h5>
                            <p class="card-text"><strong>Authors:</strong></p>
                            <ul class="list-unstyled">
                                @foreach($book->authors as $author)
                                    <li>{{ $author->first_name }} {{ $author->last_name }}</li>
                                @endforeach
                            </ul>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline-secondary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    @if(!empty($authors))
        <section id="authors" class="mt-5">
            <h2>Authors</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($authors as $author)
                    <div class="col">
                        <div class="card h-100 shadow">
                            <img src="{{ asset('storage/images/authors/' . $author->img_path) }}" class="card-img-top" alt="{{ $author->first_name }} {{ $author->last_name }}">

                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-3">{{ $author->first_name }} {{ $author->last_name }}</h5>
                                <p class="card-text">{{ substr($author->biography, 0, 500) . '...' }}</p>
                                <a href="{{ route('authors.show', $author->id) }}" class="btn btn-outline-secondary"><i class="bi bi-info-lg"></i></a>
                            </div>

                            <div class="list-group mb-4">
                                <a class="list-group-item list-group-item-action bg-secondary text-white">Books</a>
                                @foreach($author->books as $book)
                                    <a href="{{ route('books.show', $book->id) }}" class="list-group-item list-group-item-action">{{ $book->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
</x-layout>
