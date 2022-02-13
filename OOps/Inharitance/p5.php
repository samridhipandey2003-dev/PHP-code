<?php

//wap in php to Multiple Inheritance
//In php Multiple Inheritance is not directly Supported
//But we want it, to implement 1. traits, 2. Interfaces

class Papa1{
	public function scooty(){
	echo "Scooty method from papa1 \n";
}
}
class Papa2{
	public function bike(){
	echo "Scooty method from papa2 \n";
}
}
class Beta Implements Papa1,Papa2{
	public function cycle(){
	echo "Bike method from Beta \n";
}
}


$papa1 = new Papa1();
$papa1->scooty();

$papa2 = new Papa2();
$papa2->bike();