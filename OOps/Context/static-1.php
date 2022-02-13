<?php

//wap in php to show  static keyword

function increments(){

static $i=0;
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

//OUTPUT
/*Before Incrementing..
0
After Incrementing..
1
Before Incrementing..
1
After Incrementing..
2
Before Incrementing..
2
After Incrementing..
3
Before Incrementing..
3
After Incrementing..
4*/