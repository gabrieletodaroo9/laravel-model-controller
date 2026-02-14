@extends('layouts.master')

@section("content")

<main>
        <div class="container">

            <h2 class="my-5 fw-bold"> ALL MOVIES</h2>
            <div class="row row-cols-3 d-flex justify-content-start align-items-center text-center g-5 my-3">
                @foreach($movies as $movie)
                <div class="col">
                    <x-homeCard :movie="$movie"></x-homeCard>
                </div>
                @endforeach
            </div>

            <h2 class="my-5 fw-bold">TOP RATED MOVIES</h2>
            <div class="row row-cols-3 d-flex justify-content-center align-items-center text-center g-5 my-3">

                @foreach($topRated as $movie)
                <div class="col">
                    <x-homeCard :movie="$movie"></x-homeCard>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </main>

@endsection