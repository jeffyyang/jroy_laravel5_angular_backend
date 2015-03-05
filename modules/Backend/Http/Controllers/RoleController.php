<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;
use App\Models\Role;
use App\Models\User;


class RoleController extends Controller {

    protected $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIndex()
    {
        $roles = $this->role->all();
        return response()->json($roles);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEdit($id)
    {
        $role = $this->role->find($id);
        return response()->json(['data'=>$role]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postStore()
    {
        $role = $this->role->create(Request::all());
        return response()->json(['status'=>$role?1:0]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdate($id)
    {
        $role = $this->role->find($id);
        //tag处理
        $role->fill(Request::all());
        return response()->json(['status'=>$role->save()?1:0]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDestroy($id)
    {
        $role = $this->role->find($id);
        return response()->json(['status'=>$role->delete()?1:0]);
    }

    public function getAttr()
    {
        return response()->json(['data'=>$this->role->getAttr()]);
    }

    public function getMembers($id)
    {
        $role = $this->role->find($id)->users;
        return response()->json(['data'=>$role]);
    }

    /**
     * 解除授权
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCancelAccess($id)
    {
        $role = $this->role->find(Request::input('role_id'));
        $detachRole = User::find($id)->detachRole($role);
        return response()->json(['status'=>$detachRole?1:0]);
    }

    /**
     * 用户组添加成员
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putAddMemberRole($id){
        $role = Role::find($id);
        foreach(Request::all() as $user){
            if($user['checked']){
                User::find($user['id'])->attachRole($role);
            }
        }
        return response()->json(['status'=>1]);
    }
}