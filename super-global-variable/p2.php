<?php

//wap in php to check a array is Homogenous or Hetrogenous

function is_homo($array=[]){
       
$key_type = getType($array[0]);  
//echo $key_type;  
for($i=0;$i<count($array);$i++){   
   // echo getType($array[$i]);
   // echo PHP_EOL;
if($key_type===getType($array[$i])){

}else{
return fales;
}
       
}
return true;
     
}
var_dump(is_homo($argv));
var_dump(is_homo([10,20,30,40,60]));
var_dump(is_homo(['sakshi',10,'pandey',30,50,'angele']));
var_dump(is_homo(['sakshi','pandey','ranbeer','sweet']));


?>