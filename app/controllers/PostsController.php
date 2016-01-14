<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(5);
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
			$post->user_id = 1;
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
			$post->user_id = 1;
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
