j<?php

require_once '../index/databaseConnection.php';

class Tester extends PHPUnit_Framework_TestCase{
        public $test;
	public function testSetup(){
	        $dbc = new databaseConnection();
	        $dbc->connect();
		$this->test = $dbc->getGadget(2);
	}
        public function testItem(){
		$this->testSetup();
                $this->assertEquals($this->test->item, 2);
        }

	public function testName(){
                $this->testSetup();
                $this->assertEquals($this->test->name, "Gaming Laptop");
        }
        public function testManufacturer(){
		$this->testSetup();
                $this->assertEquals($this->test->manufacturer, "Alienware");
        }
        public function testCost(){
                $this->testSetup();
                $this->assertEquals($this->test->cost, "$500");
        }
        public function testImage(){
                $this->testSetup();
                $this->assertEquals($this->test->imgName, "2.jpg");
        }


}
?>
