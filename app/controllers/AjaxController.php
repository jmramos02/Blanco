<?php

class AjaxController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function validateUsername(){
		$username = Input::get('username');
		$number = User::where('username','=',$username)->count();
		if($number == 1) {
			return 0;
		}else{
			return 1;
		}
	}

}