<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): void
    {
        $post = Post::find(1);
        echo <<< "E"
        {$post['id']}
        {$post['title']}
        {$post->title}
        E;
        dd($post);
    }
}
