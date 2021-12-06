<?php

namespace App\Http\Controllers;

use App\Models\Threemain;
use Illuminate\Http\Request;

class ThreemainController extends Controller
{

    public function show($id)
    {
        $main = Threemain::whereId($id)
            ->firstOrFail();

        return view('three-main.show')->with([
            'main' => $main,
        ]);
    }

}
