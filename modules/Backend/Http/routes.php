<?php

Route::group(['prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
	Route::get('/',['as'=>'backend', function(){
        return view('backend::index');
    }]);
});