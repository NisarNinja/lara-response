<?php

use Easoblue\LaraResponse\LaraResponse;


if(!function_exists('api_response')){

	function api_response($data = '',$status = 200,$msg = '')
	{
	    return LaraResponse::json($data, $status, $msg);
	}

}