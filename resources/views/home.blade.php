<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My films</title>
</head>
<body>
    
<header>
<div>
    <h1>My films</h1>
</div>
</header>
<main>
<div class="row">
    @foreach($movies as $movie)
    <div class="col">
        {{$movie["title"]}}
    </div>
    @endforeach
</div>    
</main>
<footer>

</footer>

</body>
</html>