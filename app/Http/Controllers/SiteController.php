<?php

namespace App\Http\Controllers;

use App\Studios;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $studios = Studios::all();
        return view('web.FotoStudiya',compact('studios'));
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
