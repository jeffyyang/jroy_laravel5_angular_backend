<?php

Route::controller('backend/auth', 'Modules\Backend\Http\Controllers\AuthController');

Route::get('/backend',['as'=>'backend', function(){
    return view('backend::index');
}]);

Route::group(['prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers', 'middleware'=>'admin'], function()
{
	Route::controllers([
		'setting'	=> 'SettingController',
		'cms'		=> 'CmsController',
		'user'		=> 'UserController',
		'role'		=> 'RoleController',
	]);
});