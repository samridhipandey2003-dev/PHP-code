<?php

//wap in php to show program no return type

class Test{
	
	public function __construct(){
		echo 'Construnctor is called automaticly..';
		echo PHP_EOL;
		return 10;
		
	}
}
#object creation
$test= new Test();
$test= new Test;
//echo $test; //Implicity Called and cannot be returned.
$x = $test->__construct(); //Explicitly called as method can be returned
echo $x;