<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $galleries = Gallery::get();

        return view('about')->with([
            'galleries' => $galleries,
        ]);
    }

    public function statik()
    {
        return view('statik.statik');
    }
}
