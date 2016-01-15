<?php 
class AuthController extends BaseController
{
	public function getLogin()
	{
		return View::make('login');
	}
	public function postLogin()
	{
		$validator = Validator::make(Input::all(), User::$rules);
		$email = Input::get('email');
		$password = Input::get('password');
		if($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			if (Auth::attempt(array('email' => $email, 'password' => $password))) {
	    		return Redirect::intended('/posts');
			} else {
			    // Session::flash('Login Failed');
			   return 'login failed';
			}
		}
	}
	public function getLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
	public function signUp()
	{
		return View::make('create-user');
	}
	public function storeSignUp()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$user = new User();
			$user->last_name = Input::get('last_name');
			$user->first_name = Input::get('first_name');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			$user->birthday = Input::get('birthday');
			$user->save();
			return Redirect::intended('/posts');
		}
	}
}