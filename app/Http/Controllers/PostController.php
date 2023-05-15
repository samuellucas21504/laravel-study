<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', '=', '1')->paginate(5);

        return view('pages.posts', compact('posts'));
    }
    public function retrieve(string $slug)
    {
        $post = Post::where('slugged_title', '=', $slug)
        ->where('status', '=', 1)->first();

        if($post == null)
            abort(404, 'Post not found.');

        return view('pages.post-page', compact('post'));
    }
}
