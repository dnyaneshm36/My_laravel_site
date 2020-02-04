<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editprofile extends Controller
{
    //
    public function index()
        {

             $user = Auth::user();
        return view('editprofile',compact('user',$user));
        }
}
