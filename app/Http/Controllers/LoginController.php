<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{


    public function Logout(){

        Session::flush();
        return redirect('log_in');
    }

    public function ShowLogin(){
        if(Session::get('email')){
            
            Session::forget('error');
            return redirect('home')
            ->with('csrf_token', csrf_token());
        }else{
           $error = Session::get('error');
            return view('log_in')
             ->with('error', $error);
        
        }
    }

    public function AvviaLogin(){
        $user = User::where('email', request('email'))
        ->where('password', request('password'))
        ->first();
            
        if($user){
            Session::put('email', $user->email);
            return redirect('home');
        } else {
        
            Session::put('error', 'error');
            return redirect('log_in')
            ->withInput();
            
        }
        }

        
 
}
?>