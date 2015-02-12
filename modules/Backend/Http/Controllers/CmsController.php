<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends BackendController {
	
	
	public function getCategory()
	{
		$this->title = '栏目列表';
		return view('backend::cms_category_list');
	}
	
	public function getCateAdd()
	{
		$this->title = '添加栏目';
		return view('backend::cms_category_add');
	}
	
	public function postCateStore(Request $request)
	{
		dd($request->all());
	}
	
	
	
}