<x-layout title="404">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
            <p class="lead">
                {{ $exception->getMessage() }}
            </p>
            <a href="{{ route('books.index') }}" class="btn btn-primary">Go Home</a>
        </div>
    </div>
</x-layout>
