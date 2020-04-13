<?php

namespace Resource\Application\Traits;

use Resource\Application\Mutator;
use Resource\Application\Assessor;
use Resource\Application\Property;

/**
 * Standard Method
 * @package Assessors and Mutators
 * @author HallexCosta <hallex.costa@hotmail.com>
 */
trait StandardMethod
{
    public function __call($method, $args)
    {
        if (Mutator::check($method)) {
            $this->{Property::getName($method)} = $args[0];
            return $this;
        }
        if (Assessor::check($method)) {
        	return $this->{Property::getName($method)};
        }
    }
}