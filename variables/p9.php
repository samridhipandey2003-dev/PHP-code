<?php

//wap in php to show the difference b/w null and undefined

$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
echo PHP_EOL;
printf("The memory x = %d",memory_get_usage($x));
unset($x);
printf("The memory x = %d",memory_get_usage($x));



$y;//no memory
echo $y;
echo PHP_EOL;
var_dump($y);
var_dump(isset($y));
echo PHP_EOL;
printf("The memory y = %d",memory_get_usage($y));
unset($x);
printf("The memory y = %d",memory_get_usage($y));

echo PHP_EOL;
echo 'Info about z';
echo PHP_EOL;

$z=null;
echo $z;
echo PHP_EOL;
var_dump($z);
var_dump(isset($z));
echo PHP_EOL;
printf("The memory z = %d",memory_get_usage($z));
unset($z);
printf("The memory z = %d",memory_get_usage($z));


?>