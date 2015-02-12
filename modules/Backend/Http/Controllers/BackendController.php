<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class BackendController extends Controller {
	
	public $title = '';
	public function __destruct()
	{
		View::share('title', $this->title);
	}
	
	public function index()
	{
		return View::make('backend::index');
	}
	
}