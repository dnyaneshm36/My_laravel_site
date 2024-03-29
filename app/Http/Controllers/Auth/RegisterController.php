<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
          'name' => 'required|max:50',
            'email' => 'required|email|max:255|unique:users',
            'password' => [
                            'required',
                            'string',
                            'min:8',             // must be at least 10 characters in length
                            'regex:/[a-z]/',      // must contain at least one lowercase letter
                            'regex:/[A-Z]/',      // must contain at least one uppercase letter
                            'regex:/[0-9]/',      // must contain at least one digit
                            'regex:/[@$!%*#?&]/', // must contain a special character
                        ],
        'dob' => 'required|before:today',
        'phone' => 'required',
        'address' => 'required',
        'devnagri' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
/*        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'dob' => $data['dob'],
            'address' => $data['address'],
            'devnagri' => $data['devnagri'],
            'phone' => $data['phone'],
            'photo' => $date['photo'],
        ]);


        if($request->hasFile('photo')) {

        $filename      =   $request->file->getClientOriginalName();

        $request->file->storeAs('public/upload',$filename);

         $file->save();
        }
*/





        $user = User::create([
                   'name' => $data['name'],
                   'email' => $data['email'],
                   'password' => bcrypt($data['password']),
                   'photo' => 'images.png',
                   'dob' => $data['dob'],
                   'address' => $data['address'],
                   'devnagri' => $data['devnagri'],
                   'phone' => $data['phone']
               ]);
      return $user;
    }
}
