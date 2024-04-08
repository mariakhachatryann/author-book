<x-layout :title="$book->title">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $book->title }}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/images/books/' . $book->img_path) }}" class="img-fluid rounded" alt="{{ $book->title }}">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Author{{ count($book->authors) > 1 ? 's' : '' }}:</strong></p>
                        <ul class="list-unstyled">
                            @foreach($book->authors as $author)
                                <li>
                                    <a href="{{ route('authors.show', $author->id) }}">{{ $author->first_name }} {{ $author->last_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mb-3">
                            <span><strong>Publication year: </strong></span>
                            <span>{{ $book->publication_year }}</span>
                        </div>
                        <p><strong>Description:</strong></p>
                        <p>{{ $book->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
