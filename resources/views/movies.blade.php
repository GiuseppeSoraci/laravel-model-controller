@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Movies</h1>

        <p>Our Amazing Movies!</p>

        @foreach ($movies as $movie)
            <div>
                <h4><strong>{{ $movie->title }}</strong></h4>
                <div>Original Title: {{ $movie->original_title }}</div>
                <div>Nationality: {{ $movie->nationality }}</div>
                <div>Date: {{ $movie->date }}</div>
                <div>Vote: {{ $movie->vote }}</div>
            </div>
        @endforeach
    </div>
@endsection
