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

Route::middleware(['auth'])->group(function () {    
    Route::resource('/book', BookController::class);        
});

Route::get('/', [BookController::class, 'index']);

Route::get('/products', [BookController::class, 'showBooks']);

Route::get('/myproducts', [BookController::class, 'showMyBooks']);

Route::get('/contactus', [BookController::class, 'contactUs']);

Route::get('/about', [BookController::class, 'aboutUs']);

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
