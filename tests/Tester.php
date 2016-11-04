j<?php

require_once '/pipeline/index/databaseConnection.php';

class Tester extends PHPUnit_Framework_TestCase{
        public $test;
	public function testSetup(){
	        $dbc = new databaseConnection();
	        $dbc->connect();
		$this->test = $dbc->getGadget(2);
	}
        public function testItem(){
		$this->testSetup();
                $this->assertEquals($this->test->getItem(), 2);
        }

	public function testName(){
                $this->testSetup();
                $this->assertEquals($this->test->getName(), "High-End Gaming Laptop");
        }

        /** Implement the testCost method below */

        /** Implement the testManufacturer method below */

        public function testImage(){
                $this->testSetup();
                $this->assertEquals($this->test->getImageName(), "2.jpg");
        }

        public function testModel(){
                $this->testSetup();
                $this->assertEquals($this->test->getModel(), "Alien M17x");
        }
        public function testLink(){
                $this->testSetup();
                $this->assertEquals($this->test->getLink(), "www.amazon.com");
        }
        public function testIcon(){
                $this->testSetup();
                $this->assertEquals($this->test->getIcon(), "res2.jpg");
        }

}
?>
