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

class editprofileController extends Controller
{
    //
        public function index()
        {

            // $user = Auth::user();
            //return view('editdata',compact('user',$user));
            return view('editdata');
        }


        public function store(Request $request)
         {
             // file validation
            $user = Auth::user();

             $validator      =   Validator::make($request->all(),
             [
              'name' => 'required|max:50',

            'dob' => 'required|before:today',
            'phone' => 'required',
            'address' => 'required',
            'devnagri' => 'required',
            ]);

             // if validation fails
             if($validator->fails()) {
                 return back()->withErrors($validator->errors());
             }

             $user->name =$request->input('name');
             $user->dob =$request->input('dob');
             $user->address = $request->input('address');
             $user->devnagri = $request->input('devnagri');
             $user->phone = $request->input('phone');

                      $user -> save();
                     return redirect()->back()->with(['status' => 'Data updated successfully.!!!']);





         }

}
