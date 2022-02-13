<?php

//wap in php to show, variables and methods

class Test{
 
  var $a = 10;
  var $b = 20;
  
  function add(){
	  
	  $a=100;
	  $b=200;
	  
	  echo $a+$b;
	  echo "\n";
	  
	  //$test = new Test();
	  
	  echo 'this is a add function'.PHP_EOL;
	  echo $this->a + $this->b;
	  echo PHP_EOL;
	  var_dump($this);
  }
}
 $test = new Test();
 $test->add();


