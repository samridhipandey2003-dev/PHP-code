<?php

echo "From app.php <br/>";

$class_folder = scandir(dirname(__DIR__).'/class');
unset($class_folder[0],$class_folder[1]);
#print_r($class_folder);

$allow_files = [
    'User.php',
    'Student.php',
    'Teacher.php',
];

foreach($class_folder as $file){
	if(in_array($file,$allow_files)){
		require_once dirname(__DIR__).'/class/'.$file;
	}
}