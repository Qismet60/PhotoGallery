<?php

namespace App\Http\Controllers;

use App\Studios;
use App\StudioWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $studios = Studios::orderBy('id','desc')->take(4)->get();
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
        $studios = Studios::all();
        return view('web.studios',compact('studios'));
    }

    public function studio(Request $request)
    {
        $id = $request->id;
        $studios =DB::table('studios')
            ->where('id',$id)
            ->get();
        $images = DB::table('studio_works')
            ->where('studio_works.studios_id',$id)
            ->leftJoin('studios','studio_works.studios_id','=','studios.id')
            ->select('studio_works.image')
            ->get();
        return view('web.studio', compact(['studios','images']));
    }
}
