<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request,$id,$user){
    	
    	$validatedData = $request->validate([
    		'content'=>'required',
    	]);
    	$comment = Comment::create($validatedData+['article_id'=>$id,'username'=>$user]);
    	return redirect('/article/'.$id);
    }	
}
