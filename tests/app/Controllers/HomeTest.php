<?php namespace App\Controllers;


use PHPUnit\Framework\TestCase;

class HomeTest extends TestCase
{
	public function testTrueIsNotFalse(){
		$this->assertNotEquals(true,false);
	}
	public function testFalseIsFalse()
	{
		$this->assertEquals(false, false);
	}
}
