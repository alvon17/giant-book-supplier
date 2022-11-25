@extends('layout')
@section('title', 'Home')

@section('content')

    <div class="page-title">
        <h3>Book List</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards">
        @forelse ($books as $book)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Storage/'.$book->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->author }}</p>
                    </div>
                    <button class="btn detail-btn" onclick="location.href='{{ url('bookDetail', ['id' => $book->id])}}'">Detail</button>
                </div>
            </div>
        @empty

        @endforelse

    </div>
@endsection
