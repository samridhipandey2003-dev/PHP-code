<?php
//wap in php to show chaining effect in switch

$n = readline("Enter the no. B/w 1 to 5 : ");
$i=1;
switch($n){
case 1:
    echo "case 1 is execute \n";
case 2:
    echo "case 2 is execute \n";
case 3:
    echo "case 3 is execute \n";
case 4:
    echo "case 4 is execute \n";
default:
	echo "default case 10 is executing \n";
}
exit_label:;