<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinksRequest;
use App\Models\Link;
use Illuminate\Http\Request;
use Str;

class ShortenerController extends Controller
{
    public function index(Request $request)
    {
        $line = Link::where(['short_link' => $request->url()])->first();
        if($line) {
            return redirect()->away($line->full_link);
        } else
        {
            return view('shortLink');
        }
    }

    public function store(LinksRequest $request)
    {
        $full_link = $request->input('link');
        $short_link = $request->url() .'/'. Str::random(5);

        Link::create(
            ['full_link' => $full_link,
             'short_link' => $short_link]);

        return  $short_link;
    }

}
