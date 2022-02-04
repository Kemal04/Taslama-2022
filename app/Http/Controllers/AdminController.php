<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        return view('admin.home');
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
        return view('admin.foreign');
    }

    public function our_country()
    {
        return view('admin.our_country');
    }

    public function contact()
    {
        return view('admin.contact');
    }
}
