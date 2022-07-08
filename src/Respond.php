<?php

namespace Nisarr\LaraResponse;

class Respond{

	public $errors;
	public $data;
	public $code;
	public $success;

	public function __construct(){
		$this->errors = [
			'error' => '',
			'errors' => (object)[],
		];
	}
	public function newInstance(){
		return new $this;
	}

	public function setErrors($errors,$type = ''){
		$this->errors = [
			'type' => ($type === null) ? "" : $type,
			'errors' => $errors
		];
		return $this;
	}

	public function data($data){
		$this->data = $data;
		return $this;
	}
	public function code($code){
		$this->code = $code;
		return $this;
	}

	public function message($message){
		$this->message = $message;
		return $this;
	}

	public function send($data = null,$code = 200,$msg = '',$error = null,$error_type = null){

		if($error != null){
			$this->setErrors($error,$error_type);
		}
    	return response([
    		'success' => $this->getSuccessStatus($code),
    		'code' => $code,
    		'data' => $data,
    		'message' => ($msg ? $msg : $this->getMessageStatic($code)),
			'error' => $this->errors
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
 
    private function getMessageStatic($status){

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

    public function sendError($errors,$code = 400,$type = '',$msg = null,$data = null)
	{
		if($data != null){
			$this->data = $data;
		}
	    return $this->setErrors($errors,$type)->send($this->data, $code, $msg);
	}

	public function validateErrorsFormat($errors,$convertType = ''){
		// COMMA_ARRAY
		// OBJECT_WITH_STRING
		// OBJECT_WITH_ARRAY
		foreach ($errors as $key => $value) {
			
		}
		return $errors;
	}

}