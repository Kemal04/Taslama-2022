<?php

namespace App\Http\Controllers;

use App\Models\Send_money;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $sendmoneys = Send_money::get();

        return view('profil.index')->with([
            'sendmoneys' => $sendmoneys,
        ]);
    }
}
