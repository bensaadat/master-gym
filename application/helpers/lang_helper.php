<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('__'))
{
	/**
	 * Get a lang line by key
	 * 
	 * @param string $key
	 * @return string The lang line if it exists, key otherwise
	 */
	function __($key)
	{
		$CI = &get_instance();
		$line = $CI->lang->line($key);
		return empty($line) ? $key : $line;
	}
}
