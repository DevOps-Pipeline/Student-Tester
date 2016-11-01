<?php


class Gadget {

	private $item;
    private $name;
    private $model;
	private $cost;
    private $manufacturer;
    private $link;
	private $imgName;
	private $icon;
	public function __construct($it, $n, $mod, $co, $brand, $link, $image, $iconName){
		$this->item = $it;
		$this->name = $n;
		$this->model = $mod;
		$this->cost = $co;
		$this->manufacturer = $brand;
		$this->link = $link;
		$this->icon = $iconName;
		$this->imgName = $image;
	}

       	public function setName(){
		$this->name = $this->getField(0);
	}

     	public function setManufacturer(){
                $this->manufacturer = $this->getField(1);
        }

	public function setCost(){
                $this->cost =  $this->getField(2);
        }


        public function setModel(){
               	$this->model = $this->getField(3);
       	}


	public function setSpecifications(){
               	$this->specifications = $this->getField(4);
       	}

        public function getName(){
               return $this->name;
        }

       	public function getModel(){
                return $this->model;
        }

		/** Add the getCost method below */

		/** Add the getManufacturer method below */

		public function getLink(){
                return $this->link;
        }

		public function getItem(){
                return $this->item;
        }

		public function getImageName(){
                return $this->imgName;
        }

		public function getIcon(){
                return $this->icon;
        }


}



?>
