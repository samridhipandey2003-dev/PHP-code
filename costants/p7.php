<?php

//wap in php to show constant are globle

/*
define('WIFE','karteena');
printf("No One Can, Seperate Awnish from %s \n",WIFE);
$villan = 'Vicky Kaushal';
printf("The Only Villan in Awnish Life is :%s \n",$villan);
printf("************END OF GLOBAL SCOPE*************** \n");
function test(){
printf("************START OF LOCAL SCOPE*************** \n");	
}*/
define('GRAVITY',10);
printf("The value of gravity at global scope :%d \n",GRAVITY);
$gravity = 9.8;
printf("The value of gravity at global scope :%d \n",$gravity);

function test(){
printf("The value of gravity at local scope :%d \n",GRAVITY);
	
printf("The value of gravity at global scope :%d \n",$gravity);	
}
test();
?>