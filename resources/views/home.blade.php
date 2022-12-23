@extends('layouts.app')

@section('content')
    <section>
        <h1>header</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <img src="{{ $movie->image }}" alt="movie image">
                    <h3>{{ $movie->title }}</h3>
                </li>
            @endforeach
        </ul>
    </section>
@endsection