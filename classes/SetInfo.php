<?php

class SetInfo
{	

	public function pickSmaller($a, $b)
	{
		return (!is_null($a) && $a < $b) ? $a : $b;
	}

	public function pickSmallest($set)
	{
		return array_reduce($set, array($this, "pickSmaller"));
	}

	public function pickBigger($a, $b)
	{
		return (!is_null($a) && $a > $b) ? $a : $b;
	}

	public function pickBiggest($set)
	{
		return array_reduce($set, array($this, "pickBigger"));
	}

	public function getCount($set)
	{
		return count($set);
	}

	public function getSum($a, $b)
	{
		return $a + $b;
	}

	public function getTotalSum($set)
	{
		return array_reduce($set, array($this, "getSum"));
	}

	public function getAverage($set)
	{
		return $this->getTotalSum($set) / $this->getCount($set);
	}

	public function getStats($set)
	{
		return array(
			"minimum" => $this->pickSmallest($set),
			"maximum" => $this->pickBiggest($set),
			"count" => $this->getCount($set),
			"average" => $this->getAverage($set)
		);
	}
}