<?php

use App\Http\Livewire\Page;
use App\Http\Livewire\Post;
use App\Http\Livewire\Posts;
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
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/posts', Posts::class)->name('posts');
Route::get('/post/{slug}', Post::class)->name('post');
Route::get('/{slug}', Page::class)->name('page');
