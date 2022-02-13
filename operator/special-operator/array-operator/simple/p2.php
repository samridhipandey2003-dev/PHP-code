<?php
//wap i php to + operation array with duplicate subscript

$x=[10,20,30,'ravi'];
$y[0]='doremon';
$y[1]=100;
$y[2]=200;

print_r($x);
print_r(count($x));
print_r($y);
print_r(count($y));
print_r($x+$y); //$x.add($x)
print_r($y+$x); //$y.add($y)

//subscript unique : Add
//subscript duplicte : Over-write 
//latest value, will be stored.