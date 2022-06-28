<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Posts;
use Illuminate\Support\Facades\Session;

class FeedController extends BaseController {

    public function Posts(){
        if(!Session::get('email')){

            return [];
        }

        $posts = Posts::join('utente', 'utente.email', '=', 'posts.user')
        ->leftJoin('likes','likes.post', '=', 'posts.id')
        ->orderBy('posts.id')
        ->get(['utente.*', 'posts.*', 'likes.*']);
        return $posts;
        
    }
}

?>