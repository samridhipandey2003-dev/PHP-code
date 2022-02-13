<?php

//wap in php to show local and global scope of variable

$a=10;

echo "the value of a at global sscope is : $a";
echo PHP_EOL;

function display(){
	$b=200;
	global $a; //get the variable from heap
	echo "the value of global a at local scope is : $a"; //undefine variable
	echo PHP_EOL;
	echo "the value of local b at local scope is : $b";
	echo PHP_EOL;
}
display();
echo PHP_EOL;
echo "the value of a at global sscope is : $a";

?>