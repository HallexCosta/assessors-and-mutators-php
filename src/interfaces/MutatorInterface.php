<?php

namespace Resource\Application\Interfaces;

/**
 * class MutatorInterface
 */
interface MutatorInterface
{
	/**
	 * check
	 * @param  string $method
	 * @return bool
	 */
	public static function check(string $method) : bool;
}