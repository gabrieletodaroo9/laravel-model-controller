<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My films</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <header>
        <div class="bg-dark">
            <h1 class="display-2 text-white text-center py-4">MY FILMS</h1>
        </div>
    </header>
    <main>
        <div class="container">

            <h2 class="my-5 fw-bold"> ALL MOVIES</h2>
            <div class="row row-cols-3 d-flex justify-content-start align-items-center text-center g-5 my-3">
                @foreach($movies as $movie)
                <div class="col">
                    {{$movie["title"]}}
                </div>
                @endforeach
            </div>

            <h2 class="my-5 fw-bold">TOP RATED MOVIES</h2>
            <div class="row row-cols-3 d-flex justify-content-center align-items-center text-center g-5 my-3">

                @foreach($topRated as $movie)
                <div class="col">
                    {{$movie["title"]}}
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </main>
    <footer>

    </footer>

</body>

</html>