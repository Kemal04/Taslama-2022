<?php

namespace App\Http\Controllers;

use App\Models\HistoryAction;
use Illuminate\Http\Request;

class HistoryActionController extends Controller
{
    
    public function index()
    {
        $history_actions = HistoryAction::get();

        return view('history_action')->with([
            'history_actions' => $history_actions,
        ]);
    }
}
