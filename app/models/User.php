<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function getAttr()
    {
        return [
            'email' =>[
                'type'  =>'text',
                'label' =>'邮箱'
            ],
            'truename' =>[
                'type'  =>'text',
                'label' =>'真实姓名'
            ],
            'password'=>[
                'type'  =>'password',
                'label' =>'密码'
            ],
            'activated' =>[
                'type'  =>'switch',
                'label' =>'状态',
                'values'=>["1" => "正常","0"=>"禁用"]
            ]
        ];
    }

}
