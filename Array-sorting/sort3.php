<?php
//wap in php to show sort and rsort in key of Associative Array value

$a = ['10'=>'a','100'=>'c','5'=>'b'];
print_r($a);
ksort($a);

print_r($a);
krsort($a);

print_r($a);