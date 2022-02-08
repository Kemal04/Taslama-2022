<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Foreign;
use App\Models\Threemain;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $users = User::get();
        $contacts = Contact::get();

        return view('admin.index')->with([
            'users' => $users,
            'contacts' => $contacts,
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
        return view('admin.history_action');
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
        $ourcountry = Our::with('countries')
            ->get();;

        return view('admin.foreign')->with([
            'ourcountry' => $ourcountry,
        ]);
    }

    public function contact()
    {
        return view('admin.contact');
    }
}
