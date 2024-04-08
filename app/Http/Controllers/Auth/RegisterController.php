<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
       
        $rules=[
            "firstname" => "required|string",
            "email"     =>  "required|unique:users,email",
            "lastname" => "required|string",
            "name" => "required|string|unique:users,name",
            "password" => "required|min:6",
            "confirm-password"=> "required|min:6|same:password"
        ];
    
        $message = [
            "name.required"=> "check for empty username",
            "email.required"=> "check for empty email-address",
            "password.min"=>"password must not be less than 6 character",
            "firstname.required"=>"check for empty firstname input",
            "lastname.required"=>"check for empty lastname input",
            "name.unique"=> "username has been taken",
            
        ];
    
       return $validator= validator::make($data,$rules,$message);
     
        if($validator->fails()){
            // dd($validator->errors());
            return redirect()->back()->with('errors',$validator->errors());
    
        }
        
    
        
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'name' => ucfirst($data['name']),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
       
    }
    
}
