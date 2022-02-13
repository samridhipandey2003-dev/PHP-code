<?php

//wap in php to show parametrised constructor

class Test{
	
	public function __construct($name,$rollno){
	echo $name;
	echo PHP_EOL;
	echo $rollno;
	}
}
$test = new Test('Ravi',100);