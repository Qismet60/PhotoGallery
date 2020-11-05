<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SignOutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('auth.login');
    }

}
