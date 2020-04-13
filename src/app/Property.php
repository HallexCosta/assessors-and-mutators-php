<?php

namespace Resource\Application;

use Resource\Application\Interfaces\PropertyInterface;

/**
 * Property
 * @package Assessors and Mutators
 * @author HallexCosta <hallex.costa@hotmail.com>
 */
final class Property implements PropertyInterface
{
    /**
     * getName
     * @param  string $method
     * @return string
     */
    public static function getName(string $method) : string
    {
        $property = strtolower(preg_split('/^get|^set/', $method)[1]);
        return $property;
    }
}