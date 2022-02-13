<?php

//wap in php to show problem with Dynamic Nature of /

$x=readline('Enter the x value :');
$y=readline('Enter the y value :');


printf("The dvision = %d \n",$x/$y);
printf("The dvision = %f \n",$x/$y);
echo "The dvision = ";
echo $x/$y;

echo PHP_EOL;
echo "The Remainder = ";
echo $x%$y;

?>