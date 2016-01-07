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
	return View::make('hello');
});
Route::get('/resume', function()
{
	return "This is my resume!";
});
Route::get('/rolldice/{guess?}', function($guess = null)
{ 
    $dice = mt_rand(0,6);
	$data = ['guess' => $guess, 'dice' => $dice];
	return View::make('roll-dice')->with($data);
});
Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        $data = ['name' => $name];
        return View::make('my-first-view')->with($data);
    }
});
Route::get('/resume', function() 
{
    return View::make('resume');
});
