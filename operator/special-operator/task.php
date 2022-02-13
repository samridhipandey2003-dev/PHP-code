<?php

//wap in php to userdefined string_repeat function which, repeat the string n no. of time

function str_multiply($str='',$n=0)
{41
	if($n==0){
		return $str;
	}	
	$x='';
	for($i=0;$i<$n;$i++)
	{
		$x.=$str;
	}
	return $x;
} 
$a=readline('enter a string :');
$n=readline('how many times to be repeated :');
echo str_multiply($a,$n);