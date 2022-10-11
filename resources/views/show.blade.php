@extends('layouts.app')

@section('metaTitle', 'Home page Movies')

@section('content')
    <div class="container">
        <h1>Movies</h1>
        <div class="box-cards">
            @forelse ($movies as $movie)
            <div class="card">
                <h5>Title: <span>{{$movie->title}}</span></h5>
                <h5>Original Title: <span>{{$movie->original_title}}</span></h5>      
                <h5>Nationality: <span>{{$movie->nationality}}</span></h5>      
                <h5>date: <span>{{$movie->date}}</span></h5>      
                <h5>vote: <span>{{$movie->vote}}</span></h5>      
            </div>
        @empty
        @endforelse
        </div>
        
    </div>
@endsection

