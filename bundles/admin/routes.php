<?php

Route::get('(:bundle)', function()
{
	return View::of('layout')->nest('content', 'admin::login');
});

Route::post('(:bundle)/login', function()
{
	return Redirect::to('admin::dashboard');
	if(Auth::attempt(Input::get('username'), Input::get('password')))
	{
		return Redirect::to('(:bundle)/dashboard');
	}
});