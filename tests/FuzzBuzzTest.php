<?php

require_once __DIR__ . "/../src/FuzzBuzz.php";

class FuzzBuzzTest extends PHPUnit_Framework_TestCase {

	private $fuzz_buzz;

	public function setUp() {
		$this->fuzz_buzz = new FuzzBuzz();
	}

	/**
	 * @test
	 * @dataProvider provider
	 */
	public function FuzzBuzzが問題なく動作すること($num, $expected) {
		$actual = $this->fuzz_buzz->execute($num);
		$this->assertEquals($expected, $actual);
	}

	public function provider() {
		return [
			[1, 1],
			[2, 2],
			[3, "Fuzz"],
			[5, "Buzz"],
			[6, "Fuzz"],
			[10, "Buzz"],
			[15, "FuzzBuzz"],
			[30, "FuzzBuzz"],
		];
	}
}
