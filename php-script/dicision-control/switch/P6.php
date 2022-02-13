<?php
//wap in php to show chaining effect in switch

$n = readline("Enter the no. B/w 1 to 9 : ");
$i=1;
switch($n){
case 1:
    echo "case ".$i++." is execute \n";
case 2:
    echo "case ".$i++." is execute \n";
case 3:
    echo "case ".$i++." is execute \n";
case 4:
    echo "case ".$i++." is execute \n";
case 5:
    echo "case ".$i++." is execute \n";
case 6:
    echo "case ".$i++." is execute \n";
case 7:
    echo "case ".$i++." is execute \n";
case 8:
    echo "case ".$i++." is execute \n";
case 9:
    echo "case ".$i++." is execute \n";
	default:
	echo "default case is executing \n";
}