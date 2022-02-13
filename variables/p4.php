<?php

//wap in php to show boolean false stored variables

$x=false;
echo $x; //noting
echo PHP_EOL;
echo getType($x); //boolean
echo PHP_EOL;
var_dump($x); //bool(false)
echo PHP_EOL;
echo json_encode($x); //ram format

echo PHP_EOL;
echo 'on comparing the values:';
echo PHP_EOL;
echo (false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump(0==FALSE);
echo PHP_EOL;
var_demp(0==false);
echo PHP_EOL;
var_dump(0==(int)false);
echo PHP_EOL;
var_dump(0===false);



?> 