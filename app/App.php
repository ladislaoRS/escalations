<?php

/**
* 
*/
class App 
{
	
	/**
	 * undocumented class variable
	 *
	 * @var string
	 **/
	protected static $registry = [];

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/

	public static function bind($key, $value)
	{
		static::$registry[$key] = $value;
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public static function get($key)
	{
		if(! array_key_exists($key, static::$registry)) {
			throw new Exception("Error Processing Request: No {$key} is bound in the container", 1);
		}

		return static::$registry[$key];
	}
}