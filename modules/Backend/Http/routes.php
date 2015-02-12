<?php

Route::group(['prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers', 'middleware'=>'\App\Http\Middleware\Admin'], function()
{
	Route::get('/', ['as'=>'backend', 'uses'=>'BackendController@index']);
	
	Route::controller('cms', 'CmsController');
});