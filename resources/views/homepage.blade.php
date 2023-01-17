<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>film</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main >
        <div class="container">
            <h1>lista film</h1>
            <div class="row g-2">
                @foreach ($movies as $movie)       
                <div class="col-4 bg-secondary fs-3">
                    {{$movie->title}}
                    {{$movie->vote}}
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
