<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeCotroller extends Controller
{

    public function index()
    {
        return view('landing.home');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype == 1)
        {
            return view('admin.home');
        }
        else
        {
            return view('landing.home');
        }

    }
}
