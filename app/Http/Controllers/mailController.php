<?php

namespace App\Http\Controllers;

use App\Models\verifyUser;
use App\Mail\verificationMail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\userController as ControlleruserController;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\userController;


class mailController extends Controller
{
    use  ValidatesRequests,AuthorizesRequests;

    //database code same for mail message
    // change back to publ if  verification is not inherited or done under same class
    protected $verCode;
    
    
    public function codeVerify(Request $request,$userid){
        
        $rules=[
            'codeOne'=>'required|int',
            'codeTwo'=>'required|int',
            'codeThree' =>'required|int',
            'codeFour'=>'required|int'
        ];

       
        
        $codeValidator = Validator::make($request->all(),$rules);
        if($codeValidator->fails()){
           return redirect()->back()->with('error','Please make sure your inputs are numbers and make sure all fields are filled');
        }
       
       $newCode = $request->codeOne.$request->codeTwo.$request->codeThree.$request->codeFour;
       $newCode = $newCode;

       if ($userid){

            $verCode = verifyUser::select('verification_code')
                                    ->where('user_id',$userid)
                                    ->first();
                                    if (Hash::needsRehash($verCode)) {
                                        $hashed = Hash::make($verCode, [
                                                        'rounds' => '12'  
                                                                ]);

                                        $check= Hash::check($newCode,$hashed);
                                        dd($check);
                                    }
                                    else{
                                        $check= Hash::check($newCode,$verCode);
                                        dd($check);
                                    }
           
        //  dd([new IsTypeOf($verCode),new IsTypeOf($newCode)]);
                                    // try {
                                    //     $decryptedVal = Hash::check("4710",$verCode);
                                    //     dd($decryptedVal);
                                    // } catch (throwUPException $e) {
                                    //     dd($e);
                                    // }
                                    // dd($verCode);
                // $algo= hash_algos();
                // dd($algo);

        
                //    $e = Hash::check($newCode,$verCode);
                //    dd($e);
                   if(value($newCode) === value($verCode)){
                       $verified = verifyUser::find($userid)->User;
                       
                     $e =  $verified->update([
                        "email_verified_at" => date(now()),
                    ]);
                    dd($e);
                    }
                    return redirect()->back()->with('message', userController::throwMessage('credentialError'));
                   
        
        
           
        
        }
    }
}