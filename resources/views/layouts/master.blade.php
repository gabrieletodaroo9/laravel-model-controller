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
            <h1 class="display-3 text-white text-center py-4">MY FILMS IN LARAVEL</h1>
        </div>
    </header>
    @yield("content")
    <footer>

    </footer>

</body>

</html>