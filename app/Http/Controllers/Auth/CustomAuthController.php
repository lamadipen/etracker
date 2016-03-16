<?php

namespace App\Http\Controllers\Auth;


use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;  
use Request; 
use Redirect;

class CustomAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
  
    public function postLogin(Request $request) {  
        $email = Request::input('identity');
        $password = Request::input('password');       

        if (Auth::attempt(['adv_email' => $email, 'password' => $password])) {
            
    
            // Authentication passed... 
            //var_dump(Auth::user());
            //var_dump(Auth::user()->adv_id);
            //var_dump(Auth::user()->is_admin);
            
            return redirect()->intended('advisor');  
                   
        } 
        else
        {
           //return redirect()->intended('advisor');  
           //return Redirect::back();
            Redirect::to('advisor/login')->send();
        }      
    }
    

    public function getLogin(){
            return view('hello');
    }

      

}
