<?php

use App\Http\Livewire\Contact;
use App\Http\Livewire\Page;
use App\Http\Livewire\Post;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Welcome;
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

Route::get('/', Welcome::class)->name('home');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/posts', Posts::class)->name('posts');
Route::get('/post/{slug}', Post::class)->name('post');
Route::get('/{slug}', Page::class)->name('page');
