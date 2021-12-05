<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request) {
        return view('post.Index', ["posts" => Post::all()]);
    }

    public function updateView(Request $request) {
        $post = Post::find($request->id);
        $postStates = new Post();
        return view('post.Edit', [ 'post' => $post, 'states' => $postStates->state]);
    }
    public function update(Request $request) {
        $post = Post::create($request->all());
        $post->save();
        return redirect("post/index");
    }

    public function delete(Request $request) {
        $post = Post::find($request->id);
        $post->delete();
        return redirect("post/index");
    }
}
