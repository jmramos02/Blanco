<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/index', function()
{
	return View::make('index');
});
Route::get('/login', function()
{
	return View::make('login');
});
Route::get('/register',function(){
	return View::make('register');
});
Route::get('/dashboard',function(){
	$username = Session::get('username');
	if(!isset($username)){
		return Redirect::to('login');
	}else{
		$user = User::where('username', '=' , $username)->first();
		Session::put('user_info',$user);
		return View::make('dashboard');
	}
});
Route::get('/redirect{code?}',function($code = null){
	include_once('php/src/GlobeApi.php');
	$code = Input::get('code');	
	$globe = new GlobeApi('v1');
	$auth = $globe->auth('4xEbGfk9a8RfA7czo6ia6EfaEEEkf8aa','be9cf5849684d831bc858659a3a1ac41ff0fc4238e8ac08994d345fbc09ea5e2');
	$response = $auth->getAccessToken($code);
	//$arrayResponse = json_decode($response);
	var_dump($response);
	$user = User::where('subscriber_number','0'.$response['subscriber_number'])->first();
	$user->access_token = $response['access_token'];
	$user->save();
	return View::make('login');
	//return 'chicken';
});
Route::get('topup/user',function(){
	include_once('php/src/GlobeApi.php');
	$user = Session::get('user_info');
	$globe = new GlobeApi('v1');
	$selected = Input::get('amount');
	$charge = $globe->payment($user->access_token,$user->subscriber_number);
	$response = $charge->charge($selected,'61061000001');
	$user->remaining_balance = $user->remaining_balance + $selected;
	$user->save();
	return "Top up Successful";
});
Route::get('topup',function(){
	return View::make('topup');
});
Route::post('login/securelogin','LoginController@validateLogin');
Route::post('/register/adduser','SignUpController@registerUser');
Route::post('/async','AjaxController@validateUsername');