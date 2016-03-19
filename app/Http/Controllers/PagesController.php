<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function getIndex(){
		return "This is PagesController@index";
	}

	public function getShow(){
		return "This is PagesController@show";
	}

	public function getAbout(){		
		$first  = 'Alexia';
		$last   = 'Ashford';
		$skills = ['HTML5','CSS3','Laravel5','CakePHP'];
		return view("pages.about")->withFirst($first)
								->withLast($last)
								->withSkills($skills);		
		// return view("pages.about")->with(['first'=>$first,'last'=>$last,'skills'=>$skills]);
	}

	public function getContact(){
		$call  = '+66 4 480 1030';
		return view("pages.contact")->withCall($call);
	}
}
