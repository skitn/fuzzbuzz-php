<?php

class FuzzBuzz {

	public function execute($num) {

		if ($num % 3 == 0 && $num % 5 == 0) {
			return "FuzzBuzz";
		} elseif ($num % 3 == 0) {
			return "Fuzz";
		} elseif ($num % 5 == 0) {
			return "Buzz";
		}

		return $num;
	}
}
