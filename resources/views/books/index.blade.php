<x-layout :title="'Books List'">
    <div class="container mt-5">
        @auth('admin')
            <div class="text-end mb-3">
                <a href="{{ route('books.create') }}" class="btn btn-primary">Add a book</a>
            </div>
        @endauth
        <h1 class="mb-4 text-center">Books List</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($books as $book)
                <div class="col">
                    <div class="card h-100 shadow">
                        <img src="{{ asset('storage/images/books/' . $book->img_path) }}"  class="card-img-top" alt="{{$book->title}}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">{{ $book->title }}</h5>
                            <ul class="list-unstyled mb-3">
                                <li class="card-text"><strong>Author{{ count($book->authors) > 1 ? 's' : '' }}:</strong></li>
                                @foreach($book->authors as $author)
                                    <a href="{{ route('authors.show', $author->id) }}" class="list-group-item list-group-item-action">{{ $author->first_name . ' ' . $author->last_name }}</a>
                                @endforeach
                            </ul>
                            <div class="mb-3">
                                <span><strong>Publication year: </strong></span>
                                <span>{{ $book->publication_year }}</span>
                            </div>

                            <div class="d-flex gap-3 align-items-center">
                                <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline-secondary"><i class="bi bi-info-lg"></i></a>
                                @auth('admin')
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash3"></i></button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $books->links() }}
            </div>
    </div>
</x-layout>
