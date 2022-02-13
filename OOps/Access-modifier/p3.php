<?php

//Private Modifiers
//Concepts remains same for , methods

class Tatoo{
private $location = 'waist';
public function __construct(){
	echo "Access by mindi within in the class {$this->location} \n";
	
}	

}

class Parents extends Tatoo{
	public function __construct(){
		echo "Access by".__CLASS__."of mindi in the class {$this->location} \n";
	}
	
}

class Friends extends Tatoo{
	public function __construct(){
		echo "Access by".__CLASS__."of mindi in the class {$this->location} \n";
	}
	
}

class Husband extends Tatoo{
	public function __construct(){
		echo "Access by".__CLASS__."of mindi in the class {$this->location} \n";
	}
	
}

$tatoo = new Tatoo();
echo "Access from Outside the scope of class {$tatoo->location} \n";
$parents = new Parents();
$friends = new Friends();
$husband = new Husband();

