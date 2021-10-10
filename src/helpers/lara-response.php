<?php

use Easoblue\LaraResponse\LaraResponse;


if(!function_exists('api_response')){

	function api_response($data = '',$status = 200,$msg = '')
	{
	    return LaraResponse::json($data, $status, $msg);
	}

}

if(!function_exists('apiResponse')){

	function apiResponse($data = '',$status = 200,$msg = '')
	{
	    return LaraResponse::json($data, $status, $msg);
	}

}

if(!function_exists('successResponse')){

	function successResponse($msg = '',$data = '')
	{
	    return LaraResponse::json($data, 200, $msg);
	}

}

if(!function_exists('errorResponse')){

	function errorResponse($data = '',$msg = '',$status = 400)
	{
	    return LaraResponse::json($data, $status, $msg);
	}

}

if(!function_exists('error404Response')){

	function error404Response($msg = 'Not Found',$data = '')
	{
	    return LaraResponse::json($data,404, $msg);
	}
}

if(!function_exists('error400Response')){

	function error400Response($data = '',$msg = 'Validation Error')
	{
	    return LaraResponse::json($data,400, $msg);
	}

}
