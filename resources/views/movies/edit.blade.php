<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie</title>
</head>
<body>
    <h1>Edit Movie</h1>

    <!-- Form untuk mengedit data film -->
    <form action="{{ route('movies.update', $movie) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Input untuk judul -->
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $movie->title) }}" required>
        </div>

        <!-- Input untuk sutradara -->
        <div>
            <label for="director">Director:</label>
            <input type="text" id="director" name="director" value="{{ old('director', $movie->director) }}" required>
        </div>

        <!-- Input untuk deskripsi -->
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ old('description', $movie->description) }}</textarea>
        </div>

        <!-- Input untuk tahun rilis -->
        <div>
            <label for="release_year">Release Year:</label>
            <input type="number" id="release_year" name="release_year" value="{{ old('release_year', $movie->release_year) }}" required>
        </div>

        <!-- Tombol submit -->
        <button type="submit">Update Movie</button>
    </form>

    <!-- Link kembali ke daftar film -->
    <a href="{{ route('movies.index') }}">Back to Movie List</a>
</body>
</html>
