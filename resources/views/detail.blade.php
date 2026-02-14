@extends('layouts.master')

@section("content")


        <div class="container">

            <div class="card border-0 w-100" style="height:75vh;">
            <div class="card-body m-5 p-5">
                
                <h2 class="display-3 fw-bold mb-5 text-center border-bottom pb-3 ">
                    {{ $movie["title"] }}
                </h2>

                <ol class="list-group list-group-flush fs-2">
                    <li class="list-group-item py-4 d-flex justify-content-between">
                        <span class="text-muted small text-uppercase fw-bold">Titolo Originale:</span>
                        <span class="fw-semibold">{{ $movie["original_title"] }}</span>
                    </li>
                    <li class="list-group-item py-4 d-flex justify-content-between">
                        <span class="text-muted small text-uppercase fw-bold">Nazionalità:</span>
                        <span class="fw-semibold">{{ $movie["nationality"] }}</span>
                    </li>
                    <li class="list-group-item py-4 d-flex justify-content-between border-bottom-0">
                        <span class="text-muted small text-uppercase fw-bold">Voto:</span>
                        <span class="badge bg-dark rounded-pill px-4 py-3">{{ $movie["vote"] }}</span>
                    </li>
                </ol>
                

                <div class="mt-5 text-center">
                    <a href="{{ route('home') }}" class="btn btn-dark btn-lg px-5 text-uppercase fw-bold">
                        ← Torna alla Home
                    </a>
                </div>

            </div>
        </div>
        </div>
    </main>

@endsection