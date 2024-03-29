<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Ignored Error Levels
	|--------------------------------------------------------------------------
	|
	| Here you may specify the error levels that should be ignored by the
	| Laravel error handler. These levels will still be logged; however, no
	| information about about them will be displayed.
	|
	*/

	'ignore' => array(E_NOTICE, E_USER_NOTICE, E_DEPRECATED, E_USER_DEPRECATED),

	/*
	|--------------------------------------------------------------------------
	| Error Detail
	|--------------------------------------------------------------------------
	|
	| Detailed error messages contain information about the file in which an
	| error occurs, as well as a PHP stack trace containing the call stack.
	|
	| If your application is in production, consider turning off error details
	| for enhanced security and user experience. The error stack trace could
	| contain sensitive information that should not be publicly visible.
	|
	*/

	'detail' => true,

	/*
	|--------------------------------------------------------------------------
	| Error Logging
	|--------------------------------------------------------------------------
	|
	| When error logging is enabled, the "logger" Closure defined below will
	| be called for every error in your application. You are free to log the
	| errors however you want. Enjoy the flexibility.
	|
	*/

	'log' => true,

	/*
	|--------------------------------------------------------------------------
	| Error Logger
	|--------------------------------------------------------------------------
	|
	| Because of the various ways of managing error logging, you get complete
	| flexibility to manage error logging as you see fit. This function will
	| be called anytime an error occurs within your application and error
	| logging is enabled. 
	|
	| You may log the error message however you like; however, a simple log
	| solution has been setup for you which will log all error messages to
	| a single text file within the application storage directory.
	|
	| Of course, you are free to implement more complex solutions including
	| emailing the exceptions details to your team, etc.
	|
	*/

	'logger' => function($exception)
	{
		$message = (string) $exception;

		File::append(STORAGE_PATH.'log.txt', date('Y-m-d H:i:s').' - '.$message.PHP_EOL);
	},

);
