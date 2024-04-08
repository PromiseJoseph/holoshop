<?php
namespace App\Http\Helpers;



class responseHelper
{

static function throwMessage(string $detail){
        switch($detail){
            case "credentialError":   return 'check and correct wrong credentials';
            case "accountError" : return 'an error occured while creating your account please try again';
            case "sucessMessage" : return 'you have been  sucessfully logged in';
            case "logoutMessage" : return 'you  ave sucessfully logged out';
            case "requestError" : return ' an error occured while performing request';
            case "LogoutError" :  return ' sorry we are unable to logout you out now due to some reason, 
                                            please bear with us or contact our coustomer service';
            default : return $detail;
        }
    }
}