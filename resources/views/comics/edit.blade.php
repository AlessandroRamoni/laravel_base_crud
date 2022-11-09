{{-- @dd($comic) --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificare i fumetti</title>
</head>

<body>

    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ old('title', $comic->title) }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
        </div>
        <div>
            <label for="thumb">Thumbnail Link:</label>
            <input type="text" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
        </div>
        <div>
            <label for="price">Price: (use point . not comma , )</label>
            <input type="text" name="price" value="{{ old('price', $comic->price) }}">
        </div>
        <div>
            <label for="series">Series:</label>
            <input type="text" name="series" value="{{ old('series', $comic->series) }}">
        </div>
        <div>
            <label for="sale_date">Sale Date: (YYYY-MM-DD)</label>
            <input type="text" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" name="type" value="{{ old('type', $comic->type) }}">
        </div>

        <div>
            <input type="submit" value="Submit Edited Infos">
        </div>

    </form>

</body>

</html>
