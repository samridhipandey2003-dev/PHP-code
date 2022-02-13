<?php
//wap in php to show static context and non-context static
class Test{
	public $a=300;
	public static $b=400;//static context
	
	public function get_a(){ //non-static method
      echo "the value from Non static context = {$this->a}\n";		
      echo "the value from Non non context = ";
      //echo Test::$a;#error due to accesing non-static a from static context
        echo PHP_EOL;	  
	}
	public static function get_b()//satic method
	{
		//echo "the value from non static context {$this->a}\n";
		echo PHP_EOL;
		echo "the value from static context=";
		echo Test::$b;
		//echo $this->b;#error due to $this object context for satic context b
	}
}
$test = new Test();
$test->get_a();
//Test::get_a();#error get_a scope non static it cannot be called by class context
$test->get_b();
Test::get_b();