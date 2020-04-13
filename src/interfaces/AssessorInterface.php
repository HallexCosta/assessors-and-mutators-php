<?php

namespace Resource\Application\Interfaces;

/**
 * class AssessorInterface
 */
interface AssessorInterface
{
	/**
	 * check
	 * @param  string $method
	 * @return bool
	 */
	public static function check(string $method) : bool;
}