@extends('layouts.app')

{{-- content section --}}
@section('content')

    {{-- container --}}
    <div class="container mt-4 mb-4">
        <h1 class="text-center">Movies</h1>
        <div class="row row-cols-5 g-3">

            {{-- iteration for each item (movie) --}}
            @foreach ($movies as $movie)
                <div class="col">

                    {{-- card section --}}
                    <div class="card mb-4">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->original_title }}">

                        {{-- card formatting section --}}
                        <div class="card-body">

                            {{-- title section --}}
                            <h5 class="card-text">
                                Title: {{ $movie->title }}
                            </h5>

                            {{-- original title section --}}
                            <h6 class="card-text">
                                Original title: {{ $movie->original_title }}
                            </h6>

                            {{-- nationality section --}}
                            <p class="card-text">
                                Nationality: {{ $movie->nationality }}
                            </p>

                            {{-- date release section --}}
                            <p class="card-text">
                                Date release: {{ $movie->date }}
                            </p>

                            {{-- rank section --}}
                            <p class="card-text">
                                Rank: {{ $movie->vote }}
                            </p>
                            
                            {{-- link section --}}
                            <a href="#" class="btn btn-primary">Link example</a>

                        </div>
                        {{-- /card formatting section --}}

                    </div>
                    {{-- /card section --}}

                </div>
            @endforeach
            {{-- /iteration for each item (movie) --}}

        </div>
    </div>
    {{-- /container --}}

@endsection
{{-- /content section --}}
