<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Tell the model to use the categories table
    protected $table = 'categories';

    public function posts() {
    	return $this->hasMany('App\Post');
    }
}
