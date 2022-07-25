<?php

namespace App\Http\Controllers;

use App\Markdown\GithubFlavoredMarkdownConverter;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($post)
    {
        $file = new Filesystem();
        $content = $file->get(base_path('resources/docs/test.md'));

        $content = (new GithubFlavoredMarkdownConverter())->convert($content);

        return response()->view('blog.post', ['content' => $content]);
    }
}
