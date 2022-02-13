<?php

//wap to find perfect number using recursing and ternary operator
$n=readline('Enter the n value :');
if(is_perfect($n))
{
	echo "$n is perfect no.";
}
else
{
	echo "$n is not perfect";
}
function is_perfect($n,$i=1,$sum=0)
{
	if($i==$n)
	{
		return false;
	}
	else
	{
		if($n % $i==0)
		{
			$sum = $sum+$i;
		}
		if($sum==$n)
		{
			return true;
		}
		return is_perfect($n,$i+1,$sum);
	}
}
?>