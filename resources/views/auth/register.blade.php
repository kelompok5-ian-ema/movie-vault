<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Input Email -->
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Password -->
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div>
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Me</label>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit">Login</button>
            </div>
        </form>

        <!-- Link ke Register jika belum memiliki akun -->
        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a>.</p>
    </div>
</body>
</html>
