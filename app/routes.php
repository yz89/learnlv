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

Route::get('/username/{name?}', array('as'=>'home_route', function($name="yzhou")
{
	$hi = '你好';
	$object = $name;
	$data = array('hi'=>$hi, 'object'=>$object);
	return View::make('home.index', $data);
}));

Route::get('/test', function(){
	$url = URL::route('home_route');
	dd($url);
	return Redirect::route('home_route');
});