<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Tag;
/*use Illuminate\Http\Request;*/
use App\Http\Requests\ArticleRequest;
use Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller {

	// public function __construct(){
	// 	$this->middleware('auth',['except' => ['index','show']]);
	// }

	//
	public function index(){
		$articles = Article::all();
		$articles = Article::latest('published_at')->published()->get();
		return view('articles.index',compact('articles'));
	}	

	public function show($id){
		$article = Article::find($id);
		/*dd($articles);*/
		if(empty($article)){
			abort(404);
		}
		return view('articles.show',compact('article'));
	}

	public function create(){
		$tag_list = Tag::lists('name','id');
		return view('articles.create',compact('tag_list'));
	}

	public function store(ArticleRequest $request){
		// $input = Request::all();
		// $input = $request->all();
		// Article::create($input);
		$article = new Article($request->all());
		Auth::user()->article()->save($article);
		$tagsId = $request->input('tag_list');
		if(!empty($tagsId)){
			$article->tags()->sync($tagsId);
		}
		return redirect('articles');
	}

	public function edit($id){
		$article = Article::find($id);
		$tag_list = Tag::lists('name','id');
		if(empty($article)){
			abort(404);
		}
		return view('articles.edit',compact('article','tag_list'));
	}

	public function update($id,ArticleRequest $request){
		$article = Article::findOrFail($id);
		$article->update($request->all());
		$tagsId = $request->input('tag_list');
		if(!empty($tagsId)){
			$article->tags()->sync($tagsId);
		}else{
			$article->tags()->detach();
		}
		session()->flash('flash_message','Edit Article Complete');
		return redirect('articles');
	}
	
}
