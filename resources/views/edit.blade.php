<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchme — {{ $watchlist->film_title }}</title>
</head>

<body>
    <!-- Form untuk mengubah sebuah data -->
    <form action="{{ route('watchlists.update', $watchlist) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Film Title:</label>
        <input type="text" name="film_title" value="{{ $watchlist->film_title }}">
        <br>
        <br>
        <input type="submit" value="Save">
    </form>
</body>

</html>