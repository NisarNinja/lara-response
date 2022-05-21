<?php

use Nisarr\LaraResponse\Facade\LaraResponseFacade as LaraResponse;

if(!function_exists('respond')){

	function respond()
	{
	    return new LaraResponse;
	}

}


if(!function_exists('respondOK')){

	function respondOK($data,$code = 200,$msg = null)
	{
	    return LaraResponse::send($data, $code, $msg);
	}
}

if(!function_exists('respondError')){

	function respondError($type,$errors,$code = 400,$msg = null,$data = null)
	{
	    return LaraResponse::setErrors($type,$errors)->send($data, $code, $msg);
	}

}
