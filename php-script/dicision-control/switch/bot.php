<?php

//wap in php show how to run external script from internal script

$filename = $argv[1];
system("php {$filename}");