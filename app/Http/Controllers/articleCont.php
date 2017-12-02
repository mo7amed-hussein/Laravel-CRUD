<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
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

    public function editArticle(Request $request,$id)
    {
    	$article = Article::where('id',$id)->first();
    	if($request->isMethod('post'))
    	{
    		$article->title = $request['title'];
    		$article->body=$request['body'];
    		$article->save();
    		$message = "article updated successfully";
    		Session::put('message',$message);
    		return redirect()->route('home');
    	}
    	else
    	{
    		return view('edit',['article'=>$article]);
    	}
    }

    public function delArticle($id)
    {
    	$article = Article::where('id',$id)->first();
    	$article->delete();
    	$message = "article deleted successfully";
    		Session::put('message',$message);
    		return redirect()->route('home');
    }
}
