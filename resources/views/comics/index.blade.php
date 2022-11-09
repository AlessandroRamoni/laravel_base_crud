<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <title>Homepage Comics</title>
</head>

<body>


    <h1>Benvenuto nel nostro store</h1>
    {{-- @dump($comics); --}}
    <div class="contenitore_homepage">
        <div class="links">
            <ul>
                @foreach ($comics as $comic)
                    <li><a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }} </a> <span>
                            <- clicca qui</span>
                                <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input class="delete-btn" type="submit" value="Elimina">
                                </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</body>

</html>
