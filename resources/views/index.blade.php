<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchme — Track Your Most Wanted One!</title>
</head>

<body>
    <!-- Form untuk menambahkan sebuah data -->
    <form action="{{ route('watchlists.store') }}" method="POST">
        @csrf
        <label>Film Title:</label>
        <input type="text" name="film_title">
        <input type="submit" value="Add">
        <br>
        <br>
    </form>

    <!-- Table untuk menampilkan seluruh data -->
    <table>
        <tr>
            <th>Film Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        <!-- Looping data yang dikirim oleh file Controller -->
        @foreach($watchlists as $watchlist)
        <tr>
            <td>{{ $watchlist->film_title }}</td>
            <td>{{ $watchlist->created_at }}</td>
            <td>{{ $watchlist->updated_at }}</td>
            <td>
                <!-- Button untuk mengubah sebuah data -->
                <a href="{{ route('watchlists.edit', $watchlist) }}">
                    <button>Edit</button>
                </a>
                <!-- Button untuk menghapus sebuah data -->
                <form action="{{ route('watchlists.destroy', $watchlist) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>