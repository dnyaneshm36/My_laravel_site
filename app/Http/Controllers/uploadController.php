<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Auth;
use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    public function index()
        {

             $user = Auth::user();
        return view('uploadphoto',compact('user',$user));
        }


        public function store(Request $request)
         {
             // file validation
             $user = Auth::user();

             $validator      =   Validator::make($request->all(),
                 ['photo'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048']);

             // if validation fails
             if($validator->fails()) {
                 return back()->withErrors($validator->errors());
             }

             $file = Input::file('photo');

                     if($request->hasFile('photo')) {

                     $filename=  request()->photo->getClientOriginalName();

                     $request->photo->storeAs('upload',$filename);
                      $user->photo = $filename;
                      $user -> save();
                     return redirect()->back()->with(['status' => 'Profile updated successfully.!!!!']);
                    }
                else{


                 return $request->all();
               }



         }

}
