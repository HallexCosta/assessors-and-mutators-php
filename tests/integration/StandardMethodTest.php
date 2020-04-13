<?php

namespace Tests\Integration;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Resource\Application\Traits\StandardMethod;

class Testing
{
	/**
	 * name
	 * @var string $property
	 */
	private $name = 'hallex';
	/**
	 * @import StandardMethod
	 */
	use StandardMethod;
}

/**
 * test class Accessors
 */
final class StandardMethodTest extends TestCase
{
	/**
	 * @var $class
	 */
	private $class;
	/**
	 * setUp
	 */
	final public function setUp() : void
	{
		$this->class = new Testing;
	}
	/**
	 * ShouldBeAbleCreateAnMethodAccessor
	 *
	 * @test
	 */
	public function ShouldBeAbleCreateAnMethodAccessor()
	{
        $mock = $this->createMock(get_class($this->class));

        $mock->expects($this->once())
            ->method('__call')
            ->with($this->equalTo('getName'))
            ->will($this->returnValue('hallex'));

        $this->assertEquals($this->class->getName(), $mock->getName());
	}
	/**
	 * ShouldBeAbleCreateAnMethodMutator
	 *
	 * @test
	 */
	public function ShouldBeAbleCreateAnMethodMutator()
	{
		$mock = $this->createMock(get_class($this->class));

        $mock->expects($this->once())
            ->method('__call')
            ->with($this->equalTo('setName'))
            ->will($this->returnValue($this->class));

        $this->assertEquals($this->class->setName('hallex'), $mock->setName('hallex'));
	}
}