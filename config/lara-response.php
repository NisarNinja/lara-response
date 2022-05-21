<?php

/*
 * You can place your custom package configuration in here.
 */
return [
	// Enable helpers functions
	'enable_helpers' => true,

	// Enable messages in response
	'enable_messages' => true,
	
	// Success will return `true` if below status code matches else will return `false`
	'success_codes' => [
		200,
		201,
		202,
		203,
		204,
		205,
		206,
		207,
		208,
		226,
	],

	// Messages
	'messages' => [
		200 => 'OK',
		201 => 'Created',
		202 => 'Accepted',
		204 => 'No Content',
		400 => 'Bad Request',
		401 => 'Unauthorized',
		403 => 'Forbidden',
		404 => 'Not Found',
		405 => 'Method Not Allowed',
		409 => 'Conflict',
		422 => 'Unprocessable Entity',
		500 => 'Internal Server Error',
		501 => 'Not Implemented',
	]
];