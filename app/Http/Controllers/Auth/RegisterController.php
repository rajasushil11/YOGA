<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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

          $User['email'] = $data['email'];


        // Must not already exist in the `email` column of `users` table
        $rules = array('email' => 'unique:users,email');

        $validator = Validator::make($User, $rules);

        if ($validator->fails()) {
            session()->flash('failure', 'This Email id is already registered. Please Login.');
             
             return redirect('/login');
        

    
    }
    else {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
        session()->flash('success', 'Successfully Registered!.Please Check Your registered Email ID.'); 
         return redirect('/register');
     }
    }

    function check(Request $request)
    {
     if($data->get('email'))
     {
      $email = $data->get('email');
      $datas = DB::table("users")
       ->where('email', $email)
       ->count();
      if($datas > 0)
      {
       echo 'not_unique';
      }
      else
      {
       echo 'unique';
      }
     }
    }
}
