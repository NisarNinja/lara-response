<?php

use Nisarr\LaraResponse\Facade\Respond as RespondFacade;
use Nisarr\LaraResponse\Respond;

function respond(){
	return new Respond();
}

// if(!function_exists('respond')){

// 	function respond($code,$data,$msg = '',$error = null,$error_type = '')
// 	{

// 		if($data == 'NISARR_LARA_RESPONSE_EMPTY'){
// 			return new Respond;
// 		}
// 	    return Respond::send($data, $code, $msg,$error,$error_type);
// 	}
// }


if(!function_exists('respondOK')){

	function respondOK($data,$msg = null,$code = 200)
	{
	    return Respond::send($data, $code, $msg);
	}
}

if(!function_exists('respondError')){

	function respondError($errors,$code = 400,$msg = null,$type = '',$data = null)
	{
	    return Respond::setErrors($errors,$type)->send($data, $code, $msg);
	}

}
