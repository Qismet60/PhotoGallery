<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Studios;
use App\StudioWork;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function works()
    {
        $studios = Studios::all();
        return view('admin.works',compact('studios'));
    }

    public function newWork(Request $request)
    {
        $image = $request->image;
        $studios_id = $request->studios_id;
        $imgOrName = $request->file('image')->getClientOriginalName();

        $studioWork = new StudioWork();
        $studioWork->studios_id = $studios_id;
        $studioWork->image = $imgOrName;
        $studioWork->save();
        $request->file('image')->move('web/images/works',$imgOrName);
        return response()->json([
           'status'=>true,
           'msg' => 'success',
        ]);
    }
}
