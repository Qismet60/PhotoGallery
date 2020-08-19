<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Studio;
use App\Studios;


class StudioController extends Controller
{
    public function newStudio(Studio $studio)
    {
        Studios::create($studio->validated());
        return response()->json([
            'status' => true,
            'message' => 'Success'
        ]);
    }



}
