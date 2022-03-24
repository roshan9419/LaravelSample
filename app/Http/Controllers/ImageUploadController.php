<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function uploadForm()
    {
        // render upload image form
        return view('gallery.form');
    }

    public function uploadImage(Request $request)
    {
        // upload image and store in gallery directory
        $destination_path = 'public/images/gallery/';
        $request->file('image')->store($destination_path);
        return "Image uploaded successfully <a href='/my-gallery'>View Gallery</a>";
    }

    public function getAllImages()
    {
        // getting all the uploaded images from gallery directory
        $photos = array();
        foreach (Storage::files('public/images/gallery/') as $path) {
            $path = Str::replaceFirst('public', 'storage', $path);
            $photo = new Photo($path);
            array_push($photos, $photo);
        }
        return view('gallery.images', ['photos' => $photos]);
    }
}
