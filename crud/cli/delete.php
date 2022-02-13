<?php 

//<?php

#step1 : make connection

include __DIR__.'/dbconnect.php';

#step2: prapare the query

$id = readline('Enter userid :');

$sql = "delete from emp where id = '{$id}';";

#step3 : Execute the Query or Firer the Query
if(mysqli_query($conn,$sql)){
	if(mysqli_affected_rows($conn)>0){
		echo 'Record deleted successfully '; 
	}else{
		echo 'Cannot Delete Either Record Dose not exist or ID is wrong';
	}
} else {
	echo 'Record not deleted'.mysqli_error($conn);
}