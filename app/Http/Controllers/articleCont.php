<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article ;

class articleCont extends Controller
{
    //
    public function displayHome()
    {
    	$articles = Article::orderBy('created_at','desc')->get();
    	return view('home',['articles'=>$articles]);
    }

    public function readArticle($id)
    {
    	$article = Article::where('id',$id)->first();
    	return view('read',['article'=>$article]);
    }
}
