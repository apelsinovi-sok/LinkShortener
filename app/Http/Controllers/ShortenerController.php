<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class ShortenerController extends Controller
{
    public function index($link = "")
    {
//        Link::create(
//            ['full_link' =>\Str::random(),
//                'short_link' => \Str::random()]);

        return view('shortLink')->with('link',$link);
    }

    public function store(Request $request): string
    {
//        Link::create(
//            ['full_link' => $url,
//                'short_link' => \Str::random()]);

        return  $request->input();
    }
}
