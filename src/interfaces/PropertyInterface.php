<?php

namespace Resource\Application\Interfaces;

/**
 * class PropertyInterface
 */
interface PropertyInterface
{
	/**
	 * getName
	 * @param  string $method
	 * @return string
	 */
	public static function getName(string $method) : string;
}