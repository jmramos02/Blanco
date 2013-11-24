 <?php

class LoginController extends BaseController {

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

	public function registerUser(){
		$rules = array('username' => 'required|unique:users',
					   'password'=>'required');
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('register')->withErrors($validator);
		}else{
			Session::put('message','success!');
			return Redirect::to('register');
		}
		
	}

}