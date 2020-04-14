<?php

/**
 * require composer/autoload.php
 */
require_once '../bootstrap.php';

use Resource\Application\Traits\StandardMethod;

/**
 * MyClass
 */
class MyClass
{
    /**
     * StandardMethod
     * @import Assessors and Mutators
     */
    use StandardMethod;
    /**
     * someProperty
     * @var string $someProperty
     */
    private string $someProperty = 'testingProperty';
    /**
     * name
     * @var string $name
     */
    private string $name = 'Some Name';
    /**
     * age
     * @var int $age
     */
    private int $age = 17;
}

$react = new MyClass;

/**
 * Mutator
 */
$react->setSomeProperty('Some Value');
/**
 * Fluency Interface Mutators
 */
$react->setName('Hállex')->setAge(17);
/**
 * Assessors
 */
var_dump($react->getSomeProperty());// Some Value
var_dump($react->getName());// Hállex
var_dump($react->getAge());// 17