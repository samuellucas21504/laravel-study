<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $blogs = [
            [
                'title' => 'Title 1',
                'body' => 'Body'
            ],
            [
                'title' => 'Title 2',
                'body' => 'Body'
            ],
            [
                'title' => 'Title 3',
                'body' => 'Body'
            ]
        ];

        return view('pages.home', compact('blogs'));
    }
}
