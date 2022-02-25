<?php

namespace App\Http\Controllers;

use App\Models\HistoryAction;
use Illuminate\Http\Request;

class HistoryActionController extends Controller
{
    
    public function index()
    {
        $history_actions = HistoryAction::get();

        return view('history-action.index')->with([
            'history_actions' => $history_actions,
        ]);
    }

    public function show($name)
    {
        $history_action = HistoryAction::whereName($name)
            ->firstOrFail();

        return view('history-action.show')->with([
            'history_action' => $history_action,
        ]);
    }
}
