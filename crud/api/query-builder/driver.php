<?php

class Driver extends Query{
	public function first(){
		print_r($this->sql)
	}
	
}