<?php
    require __DIR__ . "/../Linianos.php";
    use PHPUnit\Framework\TestCase;
    
    class Test extends TestCase {
        public function testMultiplesOfThree() {
            $test = new Linianos;
            $expected = $test->translate(9);
            $this->assertSame("linio\n", $expected);
        }

        public function testMultiplesOfFive() {
            $test = new Linianos;
            $expected = $test->translate(25);
            $this->assertSame("IT\n", $expected);
        }

        public function testMultiplesOfFiveAndThree() {
            $test = new Linianos;
            $expected = $test->translate(30);
            $this->assertSame("Linianos\n", $expected);
        }
    }
?>