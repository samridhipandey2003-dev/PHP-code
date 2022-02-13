<?php

//wap in php to show Modify Operator

$x=10;
$x=$x+1;
echo "The value of x without Assignment Operator : $x \n"; 

$x=10;
$x+=1;
echo "The value of x without Assignment Operator : $x \n"; 

$x=10;
$z=$x++;
echo "The value of x using post Increment Operator : $x and $z \n";

$x=10;
$z=++$x;
echo "The value of x using pre Increment Operator : $x and $z \n";  

#$x+=1 : Increment by 1
#$x=+1 : $x is assignd by +1
#$x++  : Another from of, $x++ increment = post increment



?>