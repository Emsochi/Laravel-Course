<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InstagramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/instagram', [InstagramController::class, 'index'])->name('instagram');
});

Route::middleware('auth')->group(function () {
    Route::get('/p/create', [PostsController::class,'create'])->name('posts.create');
    Route::post('/p', [PostsController::class,'store'])->name('posts.store');

});


require __DIR__.'/auth.php';
