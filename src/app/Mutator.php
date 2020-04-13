<?php

namespace Resource\Application;

use Resource\Application\Interfaces\MutatorInterface;

/**
 * Mutator
 * @package Assessors and Mutators
 * @author HallexCosta <hallex.costa@hotmail.com>
 */
class Mutator implements MutatorInterface
{
	/**
	 * check
	 * @param  string $method
	 * @return bool
	 */
	public static function check(string $method) : bool
    {
         return preg_match('/^set/', $method) ? true : false;
    }
}