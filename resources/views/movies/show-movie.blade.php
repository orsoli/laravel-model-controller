@extends("layouts.app")

@section("page-description", "Show single movie details")
@section("page-name", "Movie Details")

@section("main-content")
    <div class="container my-4">
        <div class="title text-center my-4">
            <h1>{{$movie["original_title"]}} </h1>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$movie["original_title"]}}</h5>
                <p class="card-text"> {{$movie["nationality"]}} </p>
                <p class="card-text"> {{$movie["vote"]}} </p>
                <p class="card-text"><small class="text-body-secondary">Last updated: {{$movie["date"]}}</small></p>
            </div>
            <img src="{{$movie["img_url"]}}" class="card-img-top object-fit-cover" alt="{{$movie["title"]}}" height="600px">
        </div>
    </div>
@endsection
