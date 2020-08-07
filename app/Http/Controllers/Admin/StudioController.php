<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Studios;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function newStudio(Request $request)
    {
        Studios::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Success'
        ]);
    }
}
