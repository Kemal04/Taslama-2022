<?php

namespace App\Http\Controllers;

use App\Models\Send_money;
use Illuminate\Http\Request;

class SendMoneyController extends Controller
{

    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {

        $moneys = Send_money::get();

        $request->validate([
            'user_id' => 'required',
            'money' => 'required|min:10|number',
        ]);

        Send_money::create([
            'user_id' => $request->user_id,
            'money' => $request->money,
        ]);

        return view('profil')->with([
            'moneys' => $moneys,
        ]);
    }
}
