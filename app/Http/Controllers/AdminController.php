<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Contact;
use App\Models\Foreign;
use App\Models\HistoryAction;
use App\Models\Send_money;
use App\Models\Threemain;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $users = User::get();
        $contacts = Contact::get();
        $history_action = HistoryAction::get();
        $foreign = Foreign::get();
        $ourcountry = City::get();
        $sendmoney = Send_money::get();

        return view('admin.index')->with([
            'users' => $users,
            'contacts' => $contacts,
            'history_action' => $history_action,
            'foreign' => $foreign,
            'ourcountry' => $ourcountry,
            'sendmoney' => $sendmoney,
        ]);
    }

    public function user()
    {
        $users = User::get();

        return view('admin.user')->with([
            'users' => $users,
        ]);
    }

    public function history_action()
    {
        $history_actions = HistoryAction::get();

        return view('admin.history_action')->with([
            'history_actions' => $history_actions,
        ]);
    }

    public function home()
    {
        $mains = Threemain::get();

        return view('admin.home')->with([
            'mains' => $mains,
        ]);
    }

    public function about()
    {
        return view('admin.about');
    }

    public function gallery()
    {
        return view('admin.gallery');
    }

    public function foreign()
    {
        $foreigns = Foreign::with('countries')
            ->get();;

        return view('admin.foreign')->with([
            'foreigns' => $foreigns,
        ]);
    }

    public function our_country()
    {
        $ourcountries = City::with('welayats')
            ->get();;

        return view('admin.our_country')->with([
            'ourcountries' => $ourcountries,
        ]);
    }

    public function contact()
    {
        $contacts = Contact::get();;

        return view('admin.contact')->with([
            'contacts' => $contacts,
        ]);
    }
}
