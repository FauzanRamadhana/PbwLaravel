<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
// Route untuk dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk list pengguna
Route::get('/user', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('user');

// Route untuk show daftar pengguna
Route::get('/userView/{user}', [UserController::class, 'show'])->middleware(['auth', 'verified'])->name('userView');

// Route untuk daftar koleksi
Route::get('/koleksi', [CollectionController::class, 'index'])->middleware(['auth', 'verified'])->name('koleksi');

// Route untuk tambah koleksi
Route::get('/koleksiTambah', [CollectionController::class, 'create'])->middleware(['auth', 'verified'])->name('koleksiTambah');

// Route untuk simpan data koleksi
Route::post('/koleksiStore', [CollectionController::class, 'store'])->middleware(['auth', 'verified'])->name('koleksiStore');

// Rpute untuk show koleksi
Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->middleware(['auth', 'verified'])->name('koleksiView');


//Update data perubahan koleksi dan user
Route::put('/koleksiUpdate', [CollectionController::class, 'update'])->name('koleksiUpdate');
Route::put('/userUpdate', [UserController::class, 'update'])->name('userUpdate');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Nama:  Fauzan Ramadhana Sadikin
// Nim:   6706220054
// Kelas: D3IF 4603