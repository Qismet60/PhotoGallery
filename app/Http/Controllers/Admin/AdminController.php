<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Studios;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function studios()
    {
        return view('admin.studios');
    }

    public function admin()
    {
        return view('login');
    }

    public function studioWorks()
    {
        $studios = Studios::all();
//        $studio_id = Studios::count();
        return view('admin.studio_work', compact('studios'));

    }

}
