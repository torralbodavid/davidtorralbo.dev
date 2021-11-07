<?php

use App\Http\Livewire\Contact;
use App\Http\Livewire\Page;
use App\Http\Livewire\Post;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Home;
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

Route::get('/', [Home::class, '__invoke'])->name('home');
Route::get('/contact', [Contact::class, '__invoke'])->name('contact');
Route::get('/posts', [Posts::class, '__invoke'])->name('posts');
Route::get('/posts/tag/{tag}', [Posts::class, '__invoke'])->name('posts-tag');
Route::get('/post/{slug}', [Post::class, '__invoke'])->name('post');
Route::get('/{slug}', [Page::class, '__invoke'])->name('page');
