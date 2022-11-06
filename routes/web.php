<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TrashController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');})->name('home');

// Route::get('/books/trash', [BookController::class, 'trash'])->middleware(['auth', 'verified'])->name('books.trash');
Route::resource('/books', BookController::class)->middleware(['auth', 'verified']);
Route::resource('/trash', TrashController::class)->middleware(['auth', 'verified'])
    ->only(['index', 'destroy']);

require __DIR__.'/auth.php';
