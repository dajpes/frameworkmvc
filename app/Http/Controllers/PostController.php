<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = Post::findAll();
        dd($posts);
        return view('post.show');
    }
}
