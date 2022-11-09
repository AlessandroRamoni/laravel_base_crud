<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <title>Singolo Fumetto {{ $comic->title }}</title>
</head>

<body>
    <div class="contenitore_singolo">
        <a href="http://127.0.0.1:8000/">
            < Torna alla Homepage</a>
                <h1>{{ $comic->title }}</h1>

                <div class="contenitore_immagine">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>

                <p id="prezzo">Prezzo: {{ $comic->price }}</p>

                <p>{{ $comic->description }}</p>


    </div>

    <div class="modifica">
        <a href="{{ route('comics.edit', $comic->id) }}">Modifica fumetto</a>
    </div>

</body>

</html>
