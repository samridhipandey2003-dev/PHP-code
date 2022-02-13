<?php

//wap in php to show null assignment typein parameterised constructor

class Test{
	
	public $a;
	public $b;
	public $c;
		
	}
	
#object creation
$test = new Test();
var_dump($test->a);
var_dump($test->b);
var_dump($test->c);
$a;
var_dump($a);

#output
//NULL
//NULL
//NULL
//NOTICE error....
//NULL