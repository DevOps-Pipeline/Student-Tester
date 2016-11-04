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

	public function __construct($item, $name, $model, $cost, $manufacturer, $link, $imgName, $icon)
	{

		$this->setItem($item);
		$this->setName($name);
		$this->setModel($model);
		$this->setCost($cost);
		$this->setManufacturer($manufacturer);
		$this->setLink($link);
		$this->setImageName($imgName);
		$this->setIcon($icon);

	}

	public function setItem($item)
	{

		$this->item = $item;

	}

	public function setName($name)
	{

		$this->name = $name;

	}

    public function setModel($model)
	{

	       	$this->model = $model;

	}

	public function setCost($cost)
	{

	        $this->cost =  $cost;

	}

 	public function setManufacturer($manufacturer)
	{

	        $this->manufacturer = $manufacturer;

	}

	public function setLink($link)
	{

	    	$this->link = $link;

	}

	public function setImageName($imgName)
	{

	    	$this->$imgName = $imgName;

	}

	public function setIcon($icon)
	{

	    	$this->$icon = $icon;

	}

    public function getName()
	{

			return $this->name;

	}

   	public function getModel()
	{

	    	return $this->model;

	}

	/** Add the getCost method below */

	/** Add the getManufacturer method below */

	public function getLink()
	{

	    	return $this->link;

	}

	public function getItem()
	{

	        return $this->item;

	}

	public function getImageName()
	{

	        return $this->imgName;

	}

	public function getIcon()
	{

	        return $this->icon;

	}

}



?>
