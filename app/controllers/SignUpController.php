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

	public function getIndex()
	{
		require ('PHP/src/GlobeApi.php');
		$globe = new GlobeApi('v1');
		$auth = $globe->auth('4xEbGfk9a8RfA7czo6ia6EfaEEEkf8aa ','be9cf5849684d831bc858659a3a1ac41ff0fc4238e8ac08994d345fbc09ea5e2');
		
		$loginUrl = $auth->getLoginUrl();
		echo $loginUrl;
		Redirect::to($loginUrl);
	}

}