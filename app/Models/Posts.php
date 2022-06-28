<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'posts';
    public $timestamps = false;

    public function User(){

        return $this->belongsTo('App\Models\User');
    }

    public function Likes(){

        return $this->hasMany('App\Model\Likes', 'post');
    }
}
?>