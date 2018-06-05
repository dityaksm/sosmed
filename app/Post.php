<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $incrementing = false;

    protected $guarded = [];


    public function User()
    {
        return $this->belongsToMany('App\User');
    }



}
