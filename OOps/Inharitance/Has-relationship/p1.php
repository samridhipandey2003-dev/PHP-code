<?php

//Has-relationship
class A{
	
	public function bullet_bike(){
		
		echo 'This is a Bullet..'.PHP_EOL;
	}
	
}

class B extends A{
	
	public function ktm_bike(){
		
		echo 'This is a KTM Bike....'.PHP_EOL;
	}
	
}
$b=new B();
$b->ktm_bike();
$b->bullet_bike();

$a=new A();
$a->bullet_bike();