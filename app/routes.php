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

Route::resource('users', 'UserController');


Route::get('fb','SocialNetworks@loginWithFacebook');

Route::get('google','SocialNetworks@loginWithGoogle');

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', function()
{
    return View::make('login');
});

Route::get('form', function()
{
    return View::make('formulario');
});

Route::post('login', function(){
    if(Auth::attempt(Input::only('email', 'password'))) {
        return Redirect::intended('/');
    } else {
        return Redirect::back()
            ->withInput()
            ->with('error', "Invalid credentials");
    }
});

Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('/')
        ->with('message', 'You are now logged out');
});


Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});

Route::get('persona/{name}','HomeController@crearPersona');

Route::get('seguro', array('before' => 'auth.basic', function()
{
    return 'You are authenticated as ' . Auth::user()->email;
}));

Route::get('personas', function()
{
    return Persona::all();
});

Route::get('admin', array('before' => 'isAdmin', function()
{
    return 'You are an ADMIN!';
}));

Route::get('roles', function()
{
    return Auth::user()->roles;
    //return Role::all();
});