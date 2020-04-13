<?php

namespace Resource\Application;

use Resource\Application\Interfaces\AssessorInterface;

/**
 * Assessor
 * @package Assessors and Mutators
 * @author HallexCosta <hallex.costa@hotmail.com>
 */
class Assessor implements AssessorInterface
{
	/**
	 * __construct
	 * @return Assessor
	 */
	private function __construct()
	{
		return;
	}
	/**
	 * check
	 * @param  string $method
	 * @return bool
	 */
	public static function check(string $method) : bool
    {
        return preg_match('/^get/', $method) ? true : false;
    }
}