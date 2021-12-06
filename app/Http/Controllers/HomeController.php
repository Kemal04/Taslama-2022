<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Threemain;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mains = Threemain::get();

        return view('index')->with([
            'mains' => $mains,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
