<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catgory;


class AdminController extends Controller
{
    public function catagory()
    {
        $catagory = Catgory::all();
        //echo "M"
        return view('admin.catagory',compact('catagory'));
    }

    public function add_catagory(Request $request)
    {
        $data = new Catgory;
        $data->catgories_name = $request->catagory;
        $data->save();
        return redirect()->back();      
    }
}
