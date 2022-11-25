@extends('layout')
@section('title', 'Publisher')

@section('content')
    @forelse ($publishers as $publisher)
        <div class="publisher-info">
            <div class="row">
                <div class="col publisher-detail">
                    <h3>{{ $publisher->name }}</h3>
                    <h3>Address - {{ $publisher->address }}</h3>
                    <h3>Phone - {{ $publisher->phone }}</h3>
                    <h3>Email - {{ $publisher->email }}</h3>
                </div>
                <div class="col d-flex flex-row-reverse logo-image">
                    <img src="{{ asset('Storage/'.$publisher->image) }}" alt="..." height="200px" width="200px">
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards">
            @forelse ($publisher->book as $book)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('Storage/'.$book->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->title}}</h5>
                            <p class="card-text">{{ $book->synopsis }}</p>
                        </div>
                        <button class="btn detail-btn"
                        onclick="location.href='{{ url('bookDetail', ['id' => $book->id])}}'">Detail</button>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    @empty
    @endforelse
@endsection
