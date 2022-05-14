<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('books/index');
}); */

/* Route::get('/products', function () {
    return view('books/products');
}); */

Route::middleware(['auth'], 'verified')->group(function () {    
    Route::resource('/book', BookController::class)->middleware('verified');               
});

Route::get('/', [BookController::class, 'index'])->middleware('verified');

Route::get('/products', [BookController::class, 'showBooks'])->middleware('verified');

Route::get('/myproducts', [BookController::class, 'showMyBooks'])->middleware('verified');

Route::get('/contactus', [BookController::class, 'contactUs'])->middleware('verified');

Route::get('/about', [BookController::class, 'aboutUs'])->middleware('verified');

Route::get('/booksadmin', [BookController::class, 'showBooksAdmin'])->middleware('verified');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard');
});


/* Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('books/index');
    })->name('dashboard');
}); */

/* Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard');
});
 */
