<?php

require_once '/pipeline/index/Gadget.php';

class localTester extends PHPUnit_Framework_TestCase
{

    public $test;

    public function testName()
    {

        $this->test = new Gadget(1, "Gaming Laptop", "Alienware-M17X", "$699", "Alienware", "www.amazon.com", "1.jpg", "res1.jpg");
        $this->assertEquals($this->test->getName(), "Gaming Laptop");

    }

    /** Implement the testCost method below */

    /** Implement the testManufacturer method below */

    public function testModel()
    {

        $this->test = new Gadget(1, "Gaming Laptop", "Alienware-M17X", "$699", "Alienware", "www.amazon.com", "1.jpg", "res1.jpg");
        $this->assertEquals($this->test->getModel(), "Alienware-M17X");

    }

    public function testLink()
    {

        $this->test = new Gadget(1, "Gaming Laptop", "Alienware-M17X", "$699", "Alienware", "www.amazon.com", "1.jpg", "res1.jpg");
        $this->assertEquals($this->test->getLink(), "www.amazon.com");

    }

    public function testImage()
    {

        $this->test = new Gadget(1, "Gaming Laptop", "Alienware-M17X", "$699", "Alienware", "www.amazon.com", "1.jpg", "res1.jpg");
        $this->assertEquals($this->test->getImageName(), "1.jpg");

    }

    public function testIcon()
    {

        $this->test = new Gadget(1, "Gaming Laptop", "Alienware-M17X", "$699", "Alienware", "www.amazon.com", "1.jpg", "res1.jpg");
        $this->assertEquals($this->test->getIcon(), "res1.jpg");

    }

    public function testItem()
    {

        $this->test = new Gadget(1, "Gaming Laptop", "Alienware-M17X", "$699", "Alienware", "www.amazon.com", "1.jpg", "res1.jpg");
        $this->assertEquals($this->test->getItem(), 1);

    }
    
}
?>
