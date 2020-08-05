<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
    public function admin(){
        return view('login');
    }

}
