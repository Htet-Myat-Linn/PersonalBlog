<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['article_name','author_id','content','category_id','article','description','images','contentImages'];
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}
