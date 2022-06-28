<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Posts;
use Illuminate\Support\Facades\Session;

class HomeController extends BaseController {

    public function ShowHome(){

        if(!Session::get('email')){
            return redirect('log_in');
        }
        
        $user = User::find(Session::get('email'));
        $post = Posts::where('user', Session::get('email'))->count();
        return view('home')
        ->with('username', $user->username)
        ->with('nposts', $post);
        

    }

    
}

?>