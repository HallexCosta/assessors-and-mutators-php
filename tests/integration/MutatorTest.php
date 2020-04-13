<?php

namespace Tests\Integration;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Resource\Application\Mutator;

/**
 * test class Mutators
 */
final class MutatorTest extends TestCase
{
	/**
	 * setUp
	 */
	public function setUp() : void
	{
		$this->reflection = new \ReflectionClass(Mutator::class);
	}
	/**
	 * CannotGenerateInstanceOfMutatorClass
	 */
	public function CannotGenerateInstanceOfMutatorClass()
    {
        $reflectionConstructor = $this->reflection->getConstructor();
        $this->assertFalse($reflectionConstructor->isPublic());
    }
	/**
	 * ShouldBeAbleCheckIfIsAMutatorMethod
	 *
	 * @test
	 */
	public function ShouldBeAbleCheckIfIsAMutatorMethod()
	{
        $this->assertTrue(Mutator::check('setProperty'));
	}
	/**
	 * ShouldBeAbleCheckIfIsANotMutatorMethod
	 *
	 * @test
	 */
	public function ShouldBeAbleCheckIfIsANotMutatorMethod()
	{
        $this->assertFalse(Mutator::check('stProperty'));
	}
}