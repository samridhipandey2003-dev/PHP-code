<?php

//wap in php to show syntax error
//Since we cannot re-declare the signature(or definition) of function since it generates the fatel error, hence it is possible
//at least in php for the current version to sopport method overloading
function test(){
	echo 'Hello from test function'.PHP_EOL;
	
}

test();

//re-declare of test function

function test(){
	echo 'Hello from test function'.PHP_EOL;
}

$a=10;
echo $a;