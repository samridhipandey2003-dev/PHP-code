<?php

//wap in php to show new doc string syntax

$a = 100;
echo <<<'BLOCK'
This is a Here Doc string, $a /n 
"This is again New Line of string "$a""
'This string is inside $a single Qoutes \t tabbed' = $a

BLOCK;

$a = 100;
$code <<<'-=BLOCK'
  This is a Here Doc string, $a /n 
"This is again New Line of string "$a""
'This string is inside $a single Qoutes \t tabbed' = $a

BLOCK;
echo $code;
?>