<x-layout :title="isset($book) ? 'Edit Book' : 'Add Book'">
    <div class="container mt-5">
        <h1 class="mb-4 text-center">{{ isset($book) ? 'Edit Books' : 'Add Book' }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ isset($book) ? route('books.update', $book->id) : route('books.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($book))
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title ?? '' }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5" required>{{ $book->description ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="pub_year" class="form-label">Publication Year</label>
                                <input type="number" class="form-control" id="pub_year" name="publication_year" min="0" max="{{ date("Y") }}" value="{{ $book->publication_year ?? '' }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="authors" class="form-label">Authors</label>
                                <select class="form-select" id="authors" name="authors[]" multiple required>
                                    @foreach($authors as $author)
                                        <option value="{{ $author->id }}" {{ isset($book) && $book->authors->contains($author->id) ? 'selected' : '' }}>{{ $author->first_name }} {{ $author->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="img_path" class="form-label">Image</label>
                                <input type="file" class="form-control" id="img_path" name="img_path" value="{{$book->img_path ?? null}}">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">{{ isset($book) ? 'Update Book' : 'Add Book' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
