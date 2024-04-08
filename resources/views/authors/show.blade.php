<x-layout :title="'Author Profile'">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 text-center mb-4">
                <img src="{{ asset('storage/images/authors/' . $author->img_path) }}" class="img-fluid rounded-circle shadow-lg" style="width: 200px; height: 200px; object-fit: cover;" alt="{{ $author->first_name }} {{ $author->last_name }}">
            </div>
            <div class="col-md-8">
                <h1 class="fw-bold mb-3">{{ $author->first_name }} {{ $author->last_name }}</h1>
                <p class="lead">{{ $author->biography }}</p>
                <hr>
                <h2 class="mt-4 mb-3">Books</h2>
                <ul class="list-group">
                    @foreach($author->books as $book)
                        <a href="{{ route('books.show', $book->id) }}" class="list-group-item list-group-item-action">{{ $book->title }}</a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>
