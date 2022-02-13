<?php

//wap in php to show constant are global inside class_alias

define('GRAVITY',10);
printf("The value of gravity at global scope :%d \n",GRAVITY);
$gravity = 9.8;
printf("The value of gravity at global scope :%d \n",$gravity);

class Test{
	
	private $g;  //instance variable
	private $G;  //instance variable ===> 10
	
	public function __construct()
	{
		
		$this->g = GRAVITY;
		$this->G = $gravity; //local variable $gravity ---> assign g
		
      printf("The value of gravity at inside method :%d \n",GRAVITY);
      printf("The value of gravity at inside method :%d \n",$gravity); //undefined variable g
      printf("The value of gravity using g for class :%d \n",$this->g); //undefined variable g
      printf("The value of gravity using G for class :%d \n",$this->G);
      
		
	}	
}
$test = new Test();


?>