<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
	public $gumballMachineInstance;

	public function setUp()
	{
		$this->gumballMachineInstance = new GumballMachine();
	}

	public function testIfWheelWorks(){
		// Suppose we have 100 gumballs...
		$this->gumballMachineInstance->setGumballs(100);

		// ... And we turn the wheel once...
		$this->gumballMachineInstance->turnWheel();

		// ... We should now have 99 gumballs remaining in the machine right?
		$this->assertEquals(98, $this->gumballMachineInstance->getGumballs() - 1);
	}
}
