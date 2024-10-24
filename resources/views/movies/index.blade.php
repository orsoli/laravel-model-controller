{{-- Extends Layouts  --}}
@extends('layouts.app')
{{-- Head  --}}
@section("page-description", "Laravel Model Controller")
@section("page-name", "Laravel Model Controller")
{{-- Main  --}}
@section("main-content")
    <div class="container my-4">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
            @forelse ($movies as $movie)
                <div class="col">
                <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie["original_title"]}}</h5>
                            <p class="card-text">{{$movie["nationality"]}}</p>
                            <p class="card-text">{{$movie["vote"]}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @empty
                abort(404)
            @endforelse
        </div>
    </div>
@endsection

