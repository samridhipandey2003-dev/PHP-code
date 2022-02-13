<?php

include __DIR__.'/dbconnect.php';
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame/Console/ConsoleTable();
$table
     ->addHeader('SR No.')
     ->addHeader('id')
     ->addHeader('Name')
     ->addHeader('email');
	 
#step2 : prepare the Query
$sql = "SELECT * from emp";
#step3 : Execute the Query or Fire the Query
$result_set = mysqli_query($conn,$sql);
if(mysql_num_rows($result_set)>0){
	$date=[];
	while($row=mysqli_fetch_object($result_set)){
		$data[] = $row;
	}
}else if(mysqli_num_rows($result_set)==0){
	echo "No record found";
}else{
	echo "error".mysqli_query_error($conn);
}
$i=1;
foreach($data as $row){
		$table->addRow()
		      ->addColumn($i)
		      ->addColumn($row['id'])
		      ->addColumn($row['name'])
		      ->addColumn($row['email']);
			  $i++;
}
$table-display();