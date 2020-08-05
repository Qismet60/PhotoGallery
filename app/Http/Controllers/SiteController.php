<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('web.FotoStudiya');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function gallery()
    {
        return view('web.Gallery');
    }

    public function studios()
    {
        return view('web.studios');
    }

    public function studio($id)
    {
        return view('web.studio');
    }
}
