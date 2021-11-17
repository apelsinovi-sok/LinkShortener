<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortenerController extends Controller
{
    public function index()
    {
        return view('shortLink');
    }

    public function show(Request $request)
    {
        return $request->input();
    }
}
