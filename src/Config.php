<?php
namespace Netsilik\Lib;

/**
* Singleton
* Controls all configuration directives
*/
class Config {
	
	/**
	 * @var array $_directives List of configuration directives
	 */
	private static $_directives;
	
	/**
	 * @var array $_directives List of configuration directives
	 */
	public static function __callStatic($directive, $arguments)
	{
		if (count($arguments) == 0) {
			if (isset(self::$_directives[$directive])) {
				return self::$_directives[$directive];
			}
			return array();
		} elseif (count($arguments) == 1) {
			if (isset(self::$_directives[$directive][$arguments[0]])) {
				return self::$_directives[$directive][$arguments[0]];
			}
			trigger_error('Configuration directive '.$directive.'.'.$arguments[0].' undefined', E_USER_WARNING);
			return null;
		} elseif (isset(self::$_directives[$directive][$arguments[0]])) {
			trigger_error('Configuration directive '.$directive.'.'.$arguments[0].' already defined', E_USER_ERROR);
		}
		self::$_directives[$directive][$arguments[0]] = $arguments[1];
	}
	
	/**
	 * private constructor: prevent the use of 'new'
	 */
	final private function __construct()
	{
		// deliberately left empty
	}
	
	/**
	 * private __clone: prevent object cloning
	 */
	final private function __clone()
	{
		// deliberately left empty
	}
}
