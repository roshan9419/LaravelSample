<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function photos() {
        return "Photos Page";
    }

    public function videos() {
        return "Videos Page";
    }

    public function docs() {
        return "Documents Page";
    }
}
