<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class CreaController extends BaseController {

    public function ShowCrea(){
        if(!Session::get('email')){
            return redirect('log_in');
        }
        
        $user = User::find(Session::get('email'));
        $post = Posts::where('user', Session::get('email'))->count();
        return view('crea')
        ->with('username', $user->username)
        ->with('nposts', $post);
        
}

    public function SearchS($value){

        if(!Session::get('email')){
            return redirect('log_in');
        }
    
    //Spotify
    $value2 = urlencode($value);
    
    $client_id = env('client_id'); 
    $client_secret = env('client_secret');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $token = json_decode(curl_exec($ch))->access_token;

    $url = 'https://api.spotify.com/v1/search?type=track&q='.$value2;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $res = curl_exec($ch);
   

    return $res;
    }


    public function CreatePostS($img, $text){

        $Post = new Posts;
        $Post -> user = Session::get('email');
        $Post -> img = 'https://i.scdn.co/image/'.$img;
        $Post -> description = $text;
        $Post ->save();
        return redirect('home');
        
    }

    
    public function CreatePostP($value, $text){
        $Post = new Posts;
        $Post -> user = Session::get('email');
        $Post -> img = 'https://pixabay.com/get/'.$value;
        $Post -> description = $text;
        $Post ->save();
        return redirect('home');
    }
}
?>