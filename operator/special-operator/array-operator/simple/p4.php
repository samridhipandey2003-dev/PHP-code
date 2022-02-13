<?php
//wap i php to + operation array with duplicate subscript

$x=[10,20,30,40];
$y[0]=100;
$y[1]=200;
$y[2]=300;
$y[3]=400;
echo "The count of x : ".count($x);
echo PHP_EOL; 
echo "The count of Y : ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x); 
print_r($y); 
print_r($x+$y);
print_r($y+$x);


var_dump(($x+$y)==($y+$x)); //equal
var_dump(($x+$y)!=($y+$x)); //un-equal
var_dump(($x+$y)===($y+$x)); //equal Not Identical
//var_dump(($x+$y)===($x+$y)); //equal and Identical
//var_dump(($y+$x)===($y+$x)); //equal and Identical