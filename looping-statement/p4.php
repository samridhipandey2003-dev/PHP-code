<?php

//wap in php to find the reverse number using while

$no= readline('Enter the no :'); //123
$count= strlen($no);

$sum=0;
while($no!=0){
	
	$q = $no/10;
	$rem = $no%10;
	$ef = $rem * (pow(10,$count-1));
	$sum = $sum+$ef;
	$no = $q;
	$count--;
}
echo $sum;