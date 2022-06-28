<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Posts;
use App\Models\Likes;
use Illuminate\Support\Facades\Session;

class LikesController extends BaseController {

    public function ShowLikes($id){

        $user = Session::get('email');
        $Like = new Likes;
        $Like -> user = $user;
        $Like -> post = $id;
        $Like->save();
        
      $likes = Posts::find($id);
      return $likes;
    }

    public function ShowDislikes($id){

        $likes = Likes::where('post', $id)
        ->where('user', Session::get('email'))
        ->first();
       
        $likes->delete();

        $likes = Posts::find($id);
        return $likes;

    }
}

?>