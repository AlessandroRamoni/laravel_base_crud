<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Crea Comic</title>
</head>

<body>

    @if ($errors->any())
        <div>
            Ci sono degli errori
        </div>
    @endif

    <h1>Aggiungi il fumetto che preferisci al nostro store!</h1>
    <div class="contenitore_form">
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf

            <div @error('title') class="is-invalid" @enderror>
                <label for="title">Title</label>
                <input type="text" name="title" required maxlength="255" minlength="5"
                    value="{{ old('title', '') }}">
                @error('title')
                    <div>
                        {{ __('Sistema il titolo') }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="description">Description</label>
                <textarea required name="description" id="description" cols="30" rows="10"
                    value="{{ old('description', '') }}"></textarea>
            </div>

            <div>
                <label for="thumb">Thumb</label>
                <input type="url" maxlength="255" required name="thumb" value="{{ old('thumb', '') }}">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="number" max="999.99" required step=".01" name="price"
                    value="{{ old('price', '') }}">
            </div>

            <div>
                <label for="series">Series</label>
                <input type="text" maxlength="50" required name="series" value="{{ old('series', '') }}">
            </div>

            <div>
                <label for="sale_date">Sale_date</label>
                <input type="text" required name="sale_date" value="{{ old('sale_date', '') }}">
            </div>

            <div>
                <label for="type">Type</label>
                <input type="text" maxlength="15" required name="type" value="{{ old('type', '') }}">
            </div>

            <div id="crea">
                <input type="submit" required value="Crea!">
            </div>


        </form>
    </div>
</body>

</html>
