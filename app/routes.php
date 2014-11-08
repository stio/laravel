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

Route::get('/register', function()
{
	return View::make('register');
});

Route::post('/register',function(){
//var_dump($_POST);
$user = new User;
$user->name 		= Input::get('name');
$user->email 		= Input::get('email');
$user->password 	= Hash::make(Input::get('password'));
$user->save();

return Redirect::to("/register");

});
