<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::get();

        return view('gallery.index')->with([
            'galleries' => $galleries,
        ]);
    }

}
