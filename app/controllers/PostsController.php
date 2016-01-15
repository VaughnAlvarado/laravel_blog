<?php

class PostsController extends \BaseController {
	public function __construct()
	{
		parent:: __construct();
		//only picks the functions you want to protect, except picks the ones you dont want 
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//----> possible chaining of queries with laravel
		// $query = Post::with('user');

		//---> to check if there is a search (use Input::get and put that variable inside of the queries like title 1)
		//if (Input::has('search')) {

		// $query->where('title', 'like', '%title 1');
		// $query->orWhere('body', 'like', '%body 1');

		// whereHas takes in 2 parameters, 1 function name like user, 2 function q
		// $query->orWhereHas('user', function($q){
		// 	$q->where('email','like', '%codeup%');
		// })
			//}
		// $posts = $query->paginate(4);

		$posts = Post::with('user')->paginate(5);
		return View::make('index')->with(['posts' => $posts]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post = new Post();
			$post->subject = Input::get('subject');
			$post->body = Input::get('body');
			$post->user_id = Auth::id();
			$post->save();
			return Redirect::action('PostsController@index');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idOrTitle)
	{
		if (is_numeric($idOrTitle)) {
			$post = Post::find($idOrTitle);
		} else {
			$post = Post::where('slug_title', '=', $idOrTitle)->first();
		}
		if(!$post) {
			App::abort(404);
		} else {
			Log::info('This is some useful information.');
		}
		return View::make('show')->with(['post' => $post]);
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idOrTitle)
	{
		if (is_numeric($idOrTitle)) {
			$post = Post::find($idOrTitle);
		} else {
			$post = Post::where('slug_title', '=', $idOrTitle)->first();
		}
		if(!$post) {
			App::abort(404);
		} else {
			Log::info('This is some useful information.');
		}
		return View::make('edit')->with(['post' => $post]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idOrTitle)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			if (is_numeric($idOrTitle)) {
				$post = Post::find($idOrTitle);
			} else {
				$post = Post::where('slug_title', '=', $idOrTitle)->first();
			}
			$post->subject = Input::get('subject');
			$post->body = Input::get('body');
			$post->user_id = Auth::id();
			$post->save();
			return Redirect::action('PostsController@index');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idOrTitle)
	{
		if (is_numeric($idOrTitle)) {
				$post = Post::find($idOrTitle);
		} else {
				$post = Post::where('slug_title', '=', $idOrTitle)->first();
		}
		$post->delete();
		return Redirect::action('PostsController@index');
	}


}
