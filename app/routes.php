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

/*Event::listen('404', function () {
//	return Response::error('404');
	var_dump(123);
	die();
	return View::make('index');
});*/

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

App::error(function(Exception $exception)
{
	if($exception instanceof NotFoundHttpException) {
//		return View::make('index');//тут происходит косяк если например зайти на /edit/5
		return Redirect::to('/');//поэтому пока так
	}
});

Route::get('/', function() {
	return View::make('index');
});

Route::resource('tasks', 'TasksController');

Route::get('', function() {
	return View::make('index');
});
