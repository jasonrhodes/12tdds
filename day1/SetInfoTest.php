<?php

/**
 * Need to set up bootstrap.php to make autoloading
 * and other shit work but this is the quick and dirty
 * version to see if I can somehow make this work
 */
include "SetInfo.php";

class SetInfoTest extends PHPUnit_Framework_TestCase
{
	public function setup()
	{
		$this->exampleSet = array(44,9,90,56,4);
		$this->setInfo = new SetInfo();
	}


	public function testPickSmaller()
	{
		$smaller = $this->setInfo->pickSmaller(2, 5);
		$this->assertEquals($smaller, 2);
	}

	public function testPickSmallest()
	{
		$smallest = $this->setInfo->pickSmallest($this->exampleSet);
		$this->assertEquals($smallest, 4);
	}

	public function testPickBigger()
	{
		$bigger = $this->setInfo->pickBigger(2, 5);
		$this->assertEquals($bigger, 5);
	}

	public function testPickBiggest()
	{
		$biggest = $this->setInfo->pickBiggest($this->exampleSet);
		$this->assertEquals($biggest, 90);
	}

	public function testGetCount()
	{
		$count = $this->setInfo->getCount($this->exampleSet);
		$this->assertEquals($count, 5);
	}

	public function testGetAverage()
	{
		$average = $this->setInfo->getAverage($this->exampleSet);
		$this->assertEquals($average, 40.6);
	}

	public function testGetSum()
	{
		$sum = $this->setInfo->getSum(2, 5);
		$this->assertEquals($sum, 7);
	}

	public function testGetTotalSum()
	{
		$total = $this->setInfo->getTotalSum($this->exampleSet);
		$this->assertEquals($total, 203);
	}

	public function testGetStats()
	{
		$stats = $this->setInfo->getStats($this->exampleSet);
		$this->assertEquals($stats["minimum"], 4);
		$this->assertEquals($stats["maximum"], 90);
		$this->assertEquals($stats["count"], 5);
		$this->assertEquals($stats["average"], 40.6);
	}
}