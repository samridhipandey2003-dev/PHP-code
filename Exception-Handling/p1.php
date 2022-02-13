<?php

//wap in php to show Exception-Handling

$x=readline('Enter the Number 1 : ');
$y=readline('Enter the Number 2 : ');
$result = 0;
try{
	echo "Block of try Started....\n";
	if($y==0){
		throw new Exception();
	}else{
	$result = $x/$y;
	}
	echo "Block of try Ended....\n";
}catch(Exception $e){
	echo "Some Exception Raised".$e->getMessage();
	echo "\n";
}finally{
	echo "This Block will be, exicuted....\n";
	echo "The Result = $result \n";
}