<?php

class SignUpController extends BaseController {

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
		$rules = array('first_name' => 'required',
					   'last_name' => 'required',
					   'email' => 'required|email',
					   'username' => 'required|unique:users',
					   'password'=>'required',	
					   'contact_number' => 'required');
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('register')->withErrors($validator);
		}else{
			$user = new User();
			$user->first_name = Input::get('first_name');
			$user->password = Input::get('password');
			$user->username = Input::get('username');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->login_status = 0;
			$user->remaining_balance = 0;
			$user->access_token = '';
			$user->subscriber_number = Input::get('contact_number');
			$user->save();
			Session::put('message','Registration Successful');
			return Redirect::to('register');
		}
		
	}

}