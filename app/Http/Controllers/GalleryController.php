<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        $galleries = Gallery::get();

        return view('gallery')->with([
            'galleries' => $galleries,
        ]);
    }

}
