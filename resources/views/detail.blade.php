@extends('layout')

@section('content')

    <div class="page-title">
        <h3>Book Detail</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 container-group-cards justify-content-center">
        <div class="col w-100">
            <div class="card h-100">
                <img src="{{ asset('Storage/'.$book->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Title : {{$book->title}}</h5>
                    <h5 class="card-title">Author : {{$book->author}}</h5>
                    <h5 class="card-title">Publisher : {{$book->publisher->name}}</h5>
                    <h5 class="card-title">Year : {{$book->year}}</h5>
                    <h5 class="card-title">Synopsis :</h5>
                    <p class="card-text">{{$book->synopsis}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
