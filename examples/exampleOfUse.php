<?php

require_once '../bootstrap.php';

use Resource\Application\Traits\StandardMethod;

class MyClass
{
    use StandardMethod;
    /**
     * property
     * @var string $property
     */
    private $someProperty = 'test';
    /**
     * name
     * @var string $name
     */
    private $name = 'hallex';
    /**
     * age
     * @var string $age
     */
    private $age = 17;
}

$react = new MyClass;

var_dump($react->getSomeProperty());// Fatal Error
var_dump($react->getName());// hallex
var_dump($react->getAge());// 17