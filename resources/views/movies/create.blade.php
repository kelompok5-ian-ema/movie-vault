<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Movie</title>
</head>
<body>
    <h1>Add a New Movie</h1>

    <!-- Form untuk menambah film baru -->
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf

        <!-- Input untuk judul -->
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input untuk sutradara -->
        <div>
            <label for="director">Director:</label>
            <input type="text" id="director" name="director" value="{{ old('director') }}" required>
            @error('director')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input untuk deskripsi -->
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
            @error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input untuk tahun rilis -->
        <div>
            <label for="release_year">Release Year:</label>
            <input type="number" id="release_year" name="release_year" value="{{ old('release_year') }}" required>
            @error('release_year')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tombol submit -->
        <button type="submit">Add Movie</button>
    </form>

    <!-- Link kembali ke daftar film -->
    <a href="{{ route('movies.index') }}">Back to Movie List</a>
</body>
</html>
