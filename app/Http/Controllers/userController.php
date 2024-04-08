<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\verifyUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\verificationMail;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\JsonResponse;
use App\Http\Helpers\responseHelper;

use function PHPUnit\Framework\throwException;

class userController extends BaseController 

// all fuction not used except logout
{
    use AuthorizesRequests, ValidatesRequests;

//Code for our mail
    private $mailCode;
    //index
    public function index(){
        $products = self::getAllproducts();
        return view('index',compact('products'));
    }
/*
    //signup
    public function signup(){
        return view('logs.signup');
    }
   
    public function signupVerification(Request $request){
   
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

    $validator= validator::make($request->all(),$rules,$message);
 
    if($validator->fails()){
       
        return redirect()->back()->with('errors',$validator->errors());

    }
    

    $user = new User();
    $user->firstname = ucwords($request->firstname);
    $user->lastname = ucwords($request->lastname);
    $user->name = ucwords($request->name);
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->remember_token = Str::random(65);
    $user->save();

    // email code setup destroy if not useful  while doing code cleanup
    
    // if($user){
    //     $verifyUser =  new verifyUser();
    //     $cofgCode = config('mailConst.verCode');
    //     $verifyUser->user_id = $user->id;
    //     $verifyUser->verification_code = Hash::make($cofgCode)
    //     $verifyUser->save(); 
               
    //     $this->mailCode = $cofgCode;
    // }
// dd([$cofgCode,$this->mailCode]);

    if($user){

        // dd(Hash::check(  $cofgCode , $verifyUser->verificaton_code ));
        
            $userCred = ['email'=>$request->email, 'password' =>$request->password];
            if (Auth::guard('web')->attempt($userCred)){
                return  redirect()->route('index.auth')->with('sucess',$this->throwMessage("sucessMessage"));
            }

                // return redirect()->route('')->with('message', $this->throwMessage('sucessMessage'));


            //parsing the $verifyUser and $user  through to the view using verificationMail class _construct
         
            // Mail::to($user->email)->send(new verificationMail($this->mailCode,$user));

             // using $user-> as a means of requesting for new code
            // return  redirect()->route('mailVerView')->with('user',$user->id);
            // }
            return redirect()->back()->with('errors', $this->throwMessage('accountError'));
        
                

    }
}
 

 
 public function loginVer(Request $request){

    $loginVer = $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

    if($loginVer){
      
        $newLogs= $request->only('email','password');

            if (Auth::guard('web')->attempt($newLogs)){

                return  redirect()->route('index.auth')->with('sucess', $this->throwMessage("sucessMessage"));
            }
            return redirect()->back()->with('error', $this->throwMessage("credentialError"));
        
       
    }
 
 }
*/
 // thrown messages
 

public function adminIndex(){
    return view('adminPage');
}

 
/**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */

protected function logout(Request $request)
{
    if (Auth::check())
  {

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->logOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([ 'message'=>" sucessful"], 204)
            : redirect()->route('index')->with('message', responseHelper::throwMessage("logoutMessage"));
    }
}



/**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */

protected function guard()
{
    return Auth::guard();
}


    //all products
    public function getAllproducts(){
        return Product::Paginate(15);
     }


}
