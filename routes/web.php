<?php

use App\Mail\NewUserWelcomeMail;
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



Auth::routes();

Route::get('/email', function() {
    return new NewUserWelcomeMail();
});

Route::post('/follow/{user}', [App\Http\Controllers\FollowsController::class, 'store'])->name('follow.create');

Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('p.index');
Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create'])->name('p.create');
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store'])->name('p.store');
Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show'])->name('p.show');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

Route::post('/search', [App\Http\Controllers\ProfilesController::class, 'search'])->name('profile.search');
