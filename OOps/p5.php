<?php

//wap in php to show, Instance variable and Instance 

class Test{
	var $a=10; //instance variable
	var $b=20; //instance variable
	var $c=30; //instance variable
}
 $x =10;
 $test = new Test();
 var_dump($test); //instance
 
 var_dump($test instanceof Test); //instanceOf Operator : used to check if the given
//Object is instance of Test or nor.
var_dump($x instanceof Test);