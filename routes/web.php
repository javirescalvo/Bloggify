<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class, 'index']);
Route::get('/home',[PostController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard',['posts' => auth()->user()->posts]);
})->middleware(['auth'])->name('dashboard');

Route::resource('posts', PostController::class);

require __DIR__.'/auth.php';
