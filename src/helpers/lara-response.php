<?php

use Nisarr\LaraResponse\Facade\LaraResponseFacade as LaraResponse;


if(!function_exists('respond')){

	function respond($data = 'NISARR_LARA_RESPONSE_EMPTY',$code = 200,$msg = null)
	{
		if($data == 'NISARR_LARA_RESPONSE_EMPTY'){
			return new LaraResponse;
		}
	    return LaraResponse::send($data, $code, $msg);
	}
}


if(!function_exists('respondOK')){

	function respondOK($data,$code = 200,$msg = null)
	{
	    return LaraResponse::send($data, $code, $msg);
	}
}

if(!function_exists('respondError')){

	function respondError($errors,$code = 400,$msg = null,$type = null,$data = null)
	{
	    return LaraResponse::setErrors($type,$errors)->send($data, $code, $msg);
	}

}
