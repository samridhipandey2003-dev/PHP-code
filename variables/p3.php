<?php

//wap in php to boolean data types store in variables

$x=true; //No
echo $x;
echo PHP_EOL;
echo getType($x);
echo PHP_EOL;
var_dump($x);

echo PHP_EOL;


$z=true; //Non case sensitive
echo $z;
echo PHP_EOL;
echo getType($z);
echo PHP_EOL;
var_dump($z);
 
echo PHP_EOL;


$y=true; //No
echo $y;
echo PHP_EOL;
echo getType($y);
echo PHP_EOL;
var_dump($y);

echo PHP_EOL;
echo 'On comparing all the three value';
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (True==TRUE);
echo PHP_EOL;
echo (1==true);
echo PHP_EOL;
var_dump(1===true)


?>