{{-- Extends Layouts  --}}
@extends('layouts.app')
{{-- Head  --}}
@section("page-description", "Laravel Model Controller")
@section("page-name", "Laravel Model Controller")
{{-- Main  --}}
@section("main-content")
    <div class="container mt-4">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
            @forelse ($movies as $movie)
                <div class="col">
                <div class="card">
                        <img src="{{$movie["img_url"]}}" class="card-img-top object-fit-cover objec" alt="{{$movie["title"]}}" height="300px">
                        <div class="card-body bg-black text-light">
                            <h5 class="card-title text-light">{{$movie["original_title"]}}</h5>
                            <p class="card-text">{{strtoupper($movie["nationality"])}}</p>
                            <p class="card-text"><span>&#11088;</span> {{$movie["vote"]}}</p>
                            <a href="{{route('show-movie', $movie['id'])}}" class="btn btn-outline text-primary">more ...</a>
                        </div>
                    </div>
                </div>
            @empty
                abort(404)
            @endforelse
        </div>
    </div>
@endsection

