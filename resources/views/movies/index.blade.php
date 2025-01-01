<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Vault</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Movie Vault</h1>

    <!-- Link untuk menambah film baru -->
    <a href="{{ route('movies.create') }}">Add Movie</a>

    <!-- Tabel daftar film -->
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Director</th>
                <th>Description</th>
                <th>Release Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->release_year }}</td>
                    <td>
                        <!-- Tautan untuk melihat detail -->
                        <a href="{{ route('movies.show', $movie) }}">View</a> |
                        <!-- Tautan untuk mengedit -->
                        <a href="{{ route('movies.edit', $movie) }}">Edit</a> |
                        <!-- Form untuk menghapus -->
                        <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this movie?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No movies available. <a href="{{ route('movies.create') }}">Add a movie</a></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
