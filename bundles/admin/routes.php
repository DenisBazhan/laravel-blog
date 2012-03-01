<?php

Route::get('(:bundle)', function()
{
	return Hash::make('laravelrocks');
});