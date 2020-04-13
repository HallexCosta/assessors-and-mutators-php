<?php

namespace Tests\Integration;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Resource\Application\Assessor;

/**
 * test class Assessors
 */
final class AssessorTest extends TestCase
{
	/**
	 * setUp
	 */
	public function setUp() : void
	{
		$this->reflection = new \ReflectionClass(Assessor::class);
	}
	/**
	 * CannotGenerateInstanceOfAccesorClass
	 */
	public function CannotGenerateInstanceOfAssessorClass()
    {
        $reflectionConstructor = $this->reflection->getConstructor();
        $this->assertFalse($reflectionConstructor->isPublic());
    }
	/**
	 * ShouldBeAbleCheckIfIsAAccessorMethod
	 *
	 * @test
	 */
	public function ShouldBeAbleCheckIfIsAAssessorMethod()
	{
        $this->assertTrue(Assessor::check('getProperty'));
	}
	/**
	 * ShouldBeAbleCheckIfIsANotAccessorMethod
	 *
	 * @test
	 */
	public function ShouldBeAbleCheckIfIsANotAssessorMethod()
	{
        $this->assertFalse(Assessor::check('gtProperty'));
	}
}