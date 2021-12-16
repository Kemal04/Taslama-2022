<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Welayat;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {
        $welayats = Welayat::get();

        $cities = City::with('welayats')
            ->get();

        return view('about.ourcountry')->with([
            'welayats' => $welayats,
            'cities' => $cities,
        ]);
    }

    public function show($id)
    {
        $city = City::whereId($id)
            ->firstOrFail();

        return view('about.ourcountry-show')->with([
            'city' => $city,
        ]);
    }
}
