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
        $request->validate([
            'money' => 'required|integer|min:0',
        ]);

        $sendmoneys = new Send_money();
        $sendmoneys->user_id = auth()->id();
        $sendmoneys->money = $request->money;
        $sendmoneys->save();

        return view('gallery.index')->with([
            'sendmoneys' => $sendmoneys,
        ]);
    }
}
