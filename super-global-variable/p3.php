<?php

//wap to find the sum, of all the arguments supplied. from command line argument
print_r($argv);
$sum = 0;
$avg = 0;
for($i=1;$i<$argc;$i++)
{

$sum = $sum + (int)$argv[$i];
}
printf("The sum = %d \n",$sum);
$avg = $sum/($argc-1);
printf("The average = %d \n",$avg);



?>