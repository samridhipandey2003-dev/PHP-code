<?php

//wap in php to show without static keyword

function increments(){

$i=0;
echo 'Before Incrementing..'.PHP_EOL;
echo $i;
echo PHP_EOL;
$i++;
echo 'After Incrementing..'.PHP_EOL;
echo $i;
echo PHP_EOL;
}
increments();
increments();
increments();
increments();

//output
/*Before Incrementing..
0
After Incrementing..
1
Before Incrementing..
0
After Incrementing..
1
Before Incrementing..
0
After Incrementing..
1
Before Incrementing..
0
After Incrementing..
1*/