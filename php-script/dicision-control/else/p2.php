<?php

//wap in php to find qudrant according to given, quadrant conditions

$x=readline('Enter the x value :');
$y=readline('Enter the y value :');

if($x>0 and $y>0)
	echo '1st qudrant';
if($x>0 and $y<0)
	echo '4th  qudrant';
if($x<0 and $y>0)
	echo '2nd qudrant';
else
	echo '3rd qudrant';