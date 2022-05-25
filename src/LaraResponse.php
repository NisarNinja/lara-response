<?php

namespace Nisarr\LaraResponse;

class LaraResponse{

	public $errors;
	public $success;

	public function __construct(){
		$this->errors = [
			'error' => '',
			'errors' => (object)[],
		];
	}

	public function setErrors($errors,$type){
		$this->errors = [
			'type' => $type,
			'errors' => $errors
		];
		return $this;
	}

	public function send($data = null,$code = 200,$msg = ''){

		
    	return response([
    		'success' => $this->getSuccessStatus($code),
    		'code' => $code,
    		'data' => $data,
    		'message' => ($msg ? $msg : $this->message($code)),
			'errors' => $this->errors
    	]);

    }

	private function getSuccessStatus($code){
		// Check success status from config
		$success_codes = config('lara-response.success_codes');
		if(is_array($success_codes)){
			return in_array($code,$success_codes);
		}
		return false;

	}
 
    private function message($status){

		// Check if messages are enabled in config
		if(!config('lara-response.enable_messages')){
			return '';
		}

    	$messages = config('lara-response.messages') ?? [];

    	if(array_key_exists($status,$messages)){
    		return $messages[$status];
    	}

    	return '';
    }

}