<?php

Route::controller('backend/auth', 'Modules\Backend\Http\Controllers\AuthController');

Route::get('/backend',['as'=>'backend', function(){
    return view('backend::index');
}]);

Route::group(['prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers', 'middleware'=>'admin'], function()
{
	Route::controllers([
		'setting'	=> 'SettingController',
	]);
	
	//会员管理
    Route::controller('user', 'UserController', [
        'getIndex'      => 'backend.user.index',
        'getEdit'       => 'backend.user.edit',
        'postStore'     => 'backend.user.create',
        'putUpdate'     => 'backend.user.update',
        'deleteDestroy' => 'backend.user.delete'
    ]);
    //用户组管理
    Route::controller('role', 'RoleController', [
        'getIndex'      => 'backend.role.index',
        'getEdit'       => 'backend.role.edit',
        'postStore'     => 'backend.role.create',
        'putUpdate'     => 'backend.role.update',
        'deleteDestroy' => 'backend.role.delete',
        'getAccess'     => 'backend.role.access'
    ]);

    //cms内管理
    Route::controller('cms', 'CmsController', [
        'getIndex'       => 'backend.cms.post.index',
        'getEdit'        => 'backend.cms.post.edit',
        'postStore'      => 'backend.cms.post.create',
        'putUpdate'      => 'backend.cms.post.update',
        'deleteDestroy'  => 'backend.cms.post.delete',
        //栏目
        'getAllCate'        =>'backend.cms.allcate',
        'getListCate'        =>'backend.cms.listcate',
        'getEditCate'       => 'backend.cms.category.edit',
        'postStoreCate'     => 'backend.cms.category.create',
        'putUpdateCate'     => 'backend.cms.category.update',
        'deleteDestroyCate' => 'backend.cms.category.delete',
    ]);
});