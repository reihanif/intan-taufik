<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function guests()
    {
        $wishes = Wish::oldest()->get();

        return response()->json($wishes);
    }
}
