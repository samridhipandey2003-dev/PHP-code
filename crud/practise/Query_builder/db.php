<?php

include_once __DIR__.'/dbconnect';

class DB{
     
	 protected $DB;
	 public function __construct(){
		 global $conn;
		 $this->DB=$conn;
	 }
	 public function getMassage(){
		 return $tanh->DB;
	 }

}
$db=new DB();