<?php

class Gadget {
       	public $name;
       	public $model;
	public $cost;
       	public $manufacturer;
       	public $functionality;



       	public function setName($Name){
		$this->name = $Name;
	} 
        
        public function setModel($Model){
               	$this->model = $Model;
       	} 

	public function setCost($Cost){
               	$this->cost = $Cost;
       	} 
        
	public function setManufacturer($Manufacturer){
               	$this->manufacturer = $Manufacturer;
       	} 
        
	public function setFunctionality($Functionality){
               	$this->functionality = $Functionality;
       	}



        public function getName(){
               return $this->name;
        } 

       	public function getModel($Model){
                return $this->model;
        } 

       	public function getCost($Cost){
                return $this->cost;
        } 
       	
        public function getManufacturer($Manufacturer){
                return $this->manufacturer;
        } 
	
        public function getFunctionality($Functionality){
               	return $this->functionality;
       	} 

	public function gImages(){
		public $link = www.google.com;
		return $link;
	}

}



?>


