<?php

//wap in php to magic constant : __FILE__  and __DIR__

echo "File system Path is :".__FILE__;
echo "\n";
echo "File system Path is :".__DIR__;
echo "\n";
echo "Before Folder Path is :".dirname(dirname(__DIR__));
echo "\n";
echo "Before Folder Path is :".dirname(dirname(dirname(__DIR__)));
$laragon_path = dirname(dirname(dirname(__DIR__)));
echo "\n";
echo $laragon_path;
echo "\n";
echo "Different Path =".$laragon_path."\\"."cloner"."\\";