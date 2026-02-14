@extends('layouts.master')

@section("content")

<main>
        <div class="container">

            <h2 class="my-5 fw-bold"> DETAIL MOVIE</h2>
            <div class="row row-cols-3 d-flex justify-content-start align-items-center text-center g-5 my-3">
                <div class="col">
                        {{$movie["title"]}}
                </div>
            </div>
        </div>
        </div>
    </main>

@endsection