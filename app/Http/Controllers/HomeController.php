<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Client\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if($request->has('category_id')){
            $posts = Category::get($request->input('category_id'));
        }
        else{
            $posts = Post::all();
        }

        return view('pages.home', compact('posts'));
    }
}
