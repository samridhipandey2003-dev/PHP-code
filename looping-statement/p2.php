<?php

//wap in php to find the reverse number

$no= readline('Enter the no :'); //123
$count= strlen($no);[

$sum=0;
for(;;){
	
	$q = $no/10;
	$rem = $no%10;
	$ef = $rem * (pow(10,$count-1));
	$sum = $sum+$ef;
	$no = $q;
	$count--;
	if($no==0){
		break;
	}
}
echo $sum;