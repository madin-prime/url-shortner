<?php

use App\Http\Controllers\UrlController;
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
    return view('index');
});

Route::get('/shortener-error', function () {
    return view('error');
})->name('error');

Route::get('/get-short-link', function () {
    return view('get');
})->name('get');

Route::post('/shortener', [UrlController::class, 'store'])->name('shortener');

Route::get('/short-url/{token}', [UrlController::class,'redirect'])->name('url');
