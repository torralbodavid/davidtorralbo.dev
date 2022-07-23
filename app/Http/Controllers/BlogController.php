<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($post)
    {
        return response()->view('blog.post');
    }
}
