<x-layout :title="isset($author) ? 'Edit Author' : 'Add Author'">
    <div class="container mt-5">
        <h1 class="mb-4 text-center">{{ isset($author) ? 'Edit Author' : 'Add Author' }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ isset($author) ? route('authors.update', $author->id) : route('authors.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($author))
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $author->first_name ?? '' }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $author->last_name ?? '' }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="biography" class="form-label">Biography</label>
                                <textarea class="form-control" id="biography" name="biography" rows="5" required>{{ $author->biography ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img_path" class="form-label">Image</label>
                                <input type="file" class="form-control" id="img_path" name="img_path" value="{{ $author->img_path ?? '' }}" >
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">{{ isset($author) ? 'Update Author' : 'Add Author' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
