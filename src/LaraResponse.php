<?php

namespace Easoblue\LaraResponse;

class LaraResponse{

	public static function json($data = null,$status = 200,$msg = ''){

    	return response([
    		'status' => $status,
    		'data' => $data,
    		'msg' => ($msg ? $msg :self::message($status)),
    	]);

    }
 
    public static function message($status){

    	$messages = config('lara-response.messages') ?? [];

    	if(array_key_exists($status,$messages)){
    		return $messages[$status];
    	}

    	return "";
    }

}