<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Connect the post to the categories table
    public function category() {
    	return $this->belongsTo('App\Category');
    }

    public function tags() {
    	return $this->belongsToMany('App\Tag');
    }

    public function comments() {
    	return $this->hasMany('App\Comment');
    }

}
