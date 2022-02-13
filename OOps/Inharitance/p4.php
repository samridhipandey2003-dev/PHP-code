<?php

//wap in php to show Heiriechal Inheritance

class Papa{
	public function scooty(){
	echo "Scooty method from papa \n";
}
}
class Beta extends Papa{
	public function bike(){
	echo "Bike method from Beta \n";
}
}

class Beti extends Papa{
	public function cycle(){
	echo "Cycle method from Beti \n";
}
}


$beta=new Beta();
$beta->bike();
$beta->scooty();

$papa = new Papa();
$papa->scooty();

$beti = new Beti();
$beti->cycle();
$beti->Scooty();