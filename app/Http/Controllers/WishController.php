<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index()
    {
        $wishes = Wish::oldest()->get();

        return response()->json($wishes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'wish' => 'required'
        ]);

        $wish = new Wish();
        $wish->name = $request->name;
        $wish->wish = $request->wish;
        $wish->save();

        return response()->json(['message' => 'Wish sent!']);
    }
}
