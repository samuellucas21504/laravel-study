<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ImageController extends Controller
{
    public function uploadImage(FileRequest $request)
    {
        try{
            $request->file->storeAs('/images', "$request->fileName.png");

            return view('pages.success');

        }catch(Throwable $e) {
            abort(500);
        }
    }

    public function retrieveImage(string $name)
    {
        $url = "images/$name.png";
        if(!Storage::fileExists($url))
            abort(404);

        return view('pages.image', compact('url'));
    }
}
