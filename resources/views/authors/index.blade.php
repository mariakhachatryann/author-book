<x-layout :title="'Authors List'">
    <h1 class="mt-5 mb-4">Authors List</h1>
    @auth('admin')
        <div class="text-end mb-3">
            <a href="{{ route('authors.create') }}" class="btn btn-primary">Add an author</a>
        </div>
    @endauth
    <ul class="list-group">
        @foreach($authors as $author)
        <li class="list-group-item">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <img class="img-fluid" style="width: 300px; height: 300px; object-fit: cover; border-radius: 60%;" src="{{ asset('storage/images/authors/' . $author->img_path) }}" alt="{{ $author->first_name }} {{ $author->last_name }}">
                </div>
                <div class="col-md-9 author-info">
                    <div class="d-flex justify-content-between">
                        <h2 class="fw-bold mb-4">{{ $author->first_name }} {{ $author->last_name }}</h2>
                        <div class="d-flex gap-3 align-items-center">
                            <a href="{{ route('authors.show', $author->id) }}" class="btn btn-outline-secondary"><i class="bi bi-info-lg"></i></a>
                            @auth('admin')
                                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button>
                                </form>
                            @endauth
                        </div>
                    </div>
                    <div class="list-group mb-4">
                        <a class="list-group-item list-group-item-action bg-secondary text-white">Books</a>
                        @foreach($author->books as $book)
                            <a href="{{ route('books.show', $book->id) }}" class="list-group-item list-group-item-action">{{ $book->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="mt-4 d-flex justify-content-center">
        {{ $authors->links() }}
    </div>
</x-layout>
