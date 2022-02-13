<?php
//wap in php to find the remainder without using % operator

$x=readline('Enter the x value :');
$y=readline('Enter the y value :');


printf("The dvision = %d \n",$x/$y);
printf("The dvision = %f \n",$x/$y);
$rem1 = $x%$y;

echo PHP_EOL;
echo "The Remainder using modulo operator : $rem1 ";

$Q = $x/$y; //Quotient
$rem2 = $x-($Q*$y);

echo PHP_EOL;

echo "The Remainder without using modulo operator : $rem2 ";

// conclusion : since Q is completly divided we can never get answer 

?>