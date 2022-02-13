<?php
include_once __DIR__.'init.php';

try{
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	if($conn = mysqli_connect(
		$setting['db:config']['host'],
		$setting['db:config']['user'],
		$setting['db:config']['password'],
		$setting['db:config']['dbname'])
	){
		if($settting['conection:dbug']==true){
			print_r($conn);
			exit;
		}
	}else{
		throw new Exception();
	}
}catch(Exception $e){
	echo $e->getMassage();
	echo('db conection failed'.mysqli_connect_error());
}