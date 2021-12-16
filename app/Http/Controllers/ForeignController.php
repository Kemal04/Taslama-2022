<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Foreign;

class ForeignController extends Controller
{

    public function index()
    {
        $countries = Country::get();

        $foreigns = Foreign::with('countries')
            ->get();

        return view('about.foreign')->with([
            'foreigns' => $foreigns,
            'countries' => $countries,
        ]);
    }

    public function show($id)
    {
        $foreign = Foreign::whereId($id)
            ->firstOrFail();

        return view('about.foreign-show')->with([
            'foreign' => $foreign,
        ]);
    }

}
