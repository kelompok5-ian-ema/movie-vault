<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Route untuk Register dan Login
Auth::routes();

// Route untuk film yang membutuhkan login
Route::middleware(['auth'])->group(function () {
    // Route untuk halaman utama (daftar film)
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');

    // Route untuk menampilkan form tambah film
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');

    // Route untuk menyimpan data film baru
    Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');

    // Route untuk menampilkan detail film
    Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');

    // Route untuk menampilkan form edit film
    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');

    // Route untuk memperbarui data film
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');

    // Route untuk menghapus data film
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');

    // Route untuk halaman utama (daftar film) - hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
});

// Route untuk autentikasi
Auth::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
