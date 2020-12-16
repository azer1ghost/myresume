<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{
    public function resume()
    {
        return view('pages.resume');
    }

    public function blog()
    {
        return view('pages.blog');
    }
}
