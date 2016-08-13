<?php

require_once 'Person.php';

class Tester extends PHPUnit_Framework_TestCase{
        public $test;

        public function testName(){
                $this->test=new Person("Jason1");
                $this->assertEquals($this->test->getName(),"Jason");
        }
}
?>
