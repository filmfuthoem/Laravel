<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller {

	//
	public function index(){
		$articles = Article::all();
		return view('articles.index',compact('articles'));
	}

	public function show($id){
		$articles = Article::find($id);
		if(empty($articles)){
			abort(404);
		}
		return view('articles.show',compact('article'));
	}
}
