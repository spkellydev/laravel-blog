<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //function for posts
    public function posts() {
    	return $this->belongsToMany('App\Post', 'post_tag');
    }
}
