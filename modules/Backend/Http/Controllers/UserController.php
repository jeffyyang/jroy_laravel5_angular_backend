<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\User;

class UserController extends Controller {

    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIndex()
	{
        $data = $this->user->paginate(10)->toArray();
        return response()->json($data);
	}

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEdit($id)
    {
        $data = ['data' =>Sentry::findUserById($id)];
        return response()->json($data);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postStore()
    {

        $user = Sentry::createUser(Input::all());

        //添加默认用户组
        $genealGroup = Sentry::findGroupById(2);
        $user->addGroup($genealGroup);

        Uinfo::create(['uid'=>$user->id]);

        if($user){
            return response()->json(['status'=>1]);
        }else{
            return response()->json(['status'=>0]);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdate($id)
    {
        $data = Input::all();
        $user = Sentry::findUserById($id);

        $user->email = $user->username = $data['email'];
        $user->activated = $data['activated'];
        if($user->save()){
            return response()->json(['status'=>1]);
        }else{
            return response()->json(['status'=>0]);
        }

    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDestroy($id)
    {
        $user = Sentry::findUserById($id);
        $status = $user->delete()?1:0;

        return response()->json(['status'=>$status]);
    }

    public function getAttr()
    {
        $user = new User;
        return response()->json(['data'=>$user->getAttr()]);
    }

	
}