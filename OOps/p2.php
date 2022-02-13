<?php

//wap in php, to show class and objects in php

class Tv{
	
	var $model = 'XL TV'; //default or public modifier
	var $type = 'LED';
	var $price = '50000';
	var $color = 'Black';
	var $varient = 'Curved';
	
	public function showInformation(){
		
		echo "The Model for ".__CLASS__." {$this->model} \n";
		echo "The Type for ".__CLASS__." {$this->type} \n";
		echo "The Price for ".__CLASS__." {$this->price} \n";
		echo "The Color for ".__CLASS__." {$this->color} \n";
		echo "The Varient for ".__CLASS__." {$this->varient} \n";	
	}
	public function volume(){
		echo "Volume Up";
		
	}
}
$tv = new Tv(); //object
$tv->showInformation(); //method calling of function

echo "Tv Volume will be : ";
echo $tv->volume();
echo "\n";
echo "Tv Volume will be : {$tv->volume()}";