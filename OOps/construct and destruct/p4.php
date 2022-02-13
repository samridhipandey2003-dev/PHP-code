<?php

//wap in php to show parametrised constructor

class Test{
	
	public function __construct(){
	echo "Constructor Running....".PHP_EOL;
	}
}
$test1 = new Test;
$test2 = new Test();
$test1->__construct();
$test2->__construct();