<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['category'];
    protected function articles(){
    	return $this->hasMany('App\Article');
    }
}