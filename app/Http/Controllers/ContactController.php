<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts = Contact::orderBy('id', 'desc')
            ->paginate(12);

        return view('contact')->with([
            'contacts' => $contacts,
        ]);
    }

    public function create()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        
        $contacts = Contact::orderBy('id', 'desc')
            ->get();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'comment' => 'required|string|max:2550',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'comment' => $request->comment,
        ]);


        return view('contact')->with([
            'contacts' => $contacts,
        ]);
    }
}
