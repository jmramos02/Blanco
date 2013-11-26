 <?php

class LoginController extends BaseController {

	public function validateLogin(){
		$rules = array('username' => 'required|exists:users,username,password,'.Input::get('password'),
					   'password'=>'required');
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('login')->withErrors($validator);
		}else{
			Session::put('username',Input::get('username'));
			return Redirect::to('dashboard');
		}
		
	}

}