<?php

Route::group(['prefix' => 'customer', 'namespace' => 'Modules\Customer\Http\Controllers'], function()
{
	Route::get('/', 'CustomerController@index');
});