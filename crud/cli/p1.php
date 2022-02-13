<?php

//wap in php to show foreach array

$data=[
[
  'id'=>'1',
  'name'=>'sakshi',
  'class'=>'12th',
],

[
  'id'=>'2',
  'name'=>'sumit',
  'class'=>'11th',
],

[
  'id'=>'3',
  'name'=>'nishi',
  'class'=>'10th',
],

];
foreach($data as $user){
	echo "-----------------------\n";
	echo "user id = {$user['id']} \n";
	echo "user name = {$user['name']} \n";
	echo "user class = {$user['class']} \n";
	echo "-----------------------\n";
}