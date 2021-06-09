@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>HOMEPAGE</h1>
        <ul>
            <h2>We have</h2>
            @foreach ($elements as $element)
                <li>{{ $element }}</li>

            @endforeach
        </ul>

        <h2>Movie Production Companies</h2>
        @foreach ($productions as $production)
        {{ $production }}@if (!$loop->last),@else.@endif
        @endforeach

        <p>We are better then Netflix!</p>
    </div>
@endsection
