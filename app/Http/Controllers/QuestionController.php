<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}
	public function getCreate(){
		return view('question/create');
	}

	public function postCreate(Request $request)
	{
		$data = $request ->only('title','content');
		$question = new Question;
		$question->fill($data)->save(); 

		return redirect('/');
	}
}