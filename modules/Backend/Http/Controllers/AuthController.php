<?php namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class AuthController extends Controller {

	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;

		$this->middleware('guest', ['except' => 'logout']);
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		if ($this->auth->attempt($credentials, false))
		{
			return response()->json(['status'=>true]);
		}

		return response()->json(['status'=>false, 'error'=>'用户名或者密码不正确']);
	}
	
}