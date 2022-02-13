<?php 

//wap in php to show setter and getter\
// Setter : @method
// Getter : @method 

class Test{
	
	public $a=10; #variable public : are global variable
	public $b=10; #variable public : are global variable
    var $c=30; #variable public : are global variable
	
public function setvalue($a,$b,$c){
	
	$this->a =$b; //local
	$this->b =$b; //local
	$this->c =$c; //local
}

public function getValue(){
	
	echo "The value of a getter = {$this->a} \n ";
	echo "The value of b getter = {$this->b} \n ";
	echo "The value of c getter = {$this->c} \n ";
}
}

$test = new Test();

echo "The value of member a before setter = {$test->a} \n";
echo "The value of member b before setter = {$test->b} \n";
echo "The value of member c before setter = {$test->c} \n";

$test->setvalue(100,200,300); //setter

echo "The value of member a after setter = {$test->a} \n";
echo "The value of member b after setter = {$test->b} \n";
echo "The value of member c after setter = {$test->c} \n";

$test->getvalue(100,200,300); //getter

