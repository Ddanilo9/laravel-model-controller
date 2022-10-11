@extends('layouts.app')

@section('metaTitle', 'Home page Movies')

@section('content')
    <div class="container">
        <h1>Movies</h1>
        @forelse ($movies as $movie)
            <div class="card">
                <h3>{{$movie->title}}</h3>
            </div>
        @empty
        @endforelse
    </div>
@endsection

