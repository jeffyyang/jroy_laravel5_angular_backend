<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;

class DbController extends Controller {

	public function _getAllBack()
	{
		$back_dir = Config::get('backup::path');
	    return File::files($back_dir);
	}

	public function getAll()
	{
		$dbs = $this->_getAllBack();
		$db=[];
		foreach ($dbs as $k=>$v) {
	        $db[$k]['name'] = File::name($v);
	        $db[$k]['size'] = $this->byte_format(File::size($v), 2);
	        $db[$k]['time'] = date('Y-m-d H:i:s', File::lastModified($v));
	        $db[$k]['ext'] = File::extension($v);
	    }
	    return Response::json(['data'=>array_reverse($db)]);
	}

	public function getBackup()
	{
		\Artisan::call('db:backup');
		return Response::json(['status'=>1]);
	}

	public function getDelete()
	{
		$name = Request::get('name');
		if($name){
			$dbs = $this->_getAllBack();
			foreach ($dbs as $v) {
				if(File::name($v) == $name){
					File::delete($v);break;
				}
			}
			return Response::json(['status'=>1]);
		}
		
	}

	public function getRestore()
	{
		$name = Request::get('name');
		$ext = Config::get('backup::compress')?'.sql.gz':'.sql';
		if($name){
			\Artisan::call('db:restore', array('dump'=>$name.$ext));
		}
		return Response::json(['status'=>1]);
	}

	public function byte_format($size, $dec=2){
	    $a = array("B", "KB", "MB", "GB", "TB", "PB");
	    $pos = 0;
	    while ($size >= 1024) {
	         $size /= 1024;
	           $pos++;
	    }
	    return round($size,$dec)." ".$a[$pos];
	 }
	
}