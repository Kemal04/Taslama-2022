<?php

namespace App\Http\Controllers;

use App\Models\Threemain;
use Illuminate\Support\Str;
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

    public function edit($name)
    {

        $mains = Threemain::whereName($name)
            ->firstOrFail();
        if (!auth()->user()->is_admin) {
            abort(403);
        }

        return view('admin.home')->with([
            'mains' => $mains,
        ]);
    }


    public function update(Request $request, $name)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:1000',
        ]);

        $mains = Threemain::whereName($name)
            ->firstOrFail();

        $mains->name = $request->name;
        $mains->title = $request->title;
        $mains->save();

        return redirect()->route('admin.home');
    }
}
