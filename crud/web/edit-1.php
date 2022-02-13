<?php

include_once __DIR__.'/functions.php';
include_once __DIR__.'/query-builder/Query.php';
 
$id = get('id');
if(!empty($id)){
	$query = new Query();
	$record=$query->select('*')->table('emp')->where('id',$id)->first();
} 
 ?>
<html>
<head></head>
<body>
<form action="<?php echo url("registerHandler.php"); ?>" method="post" >
NAME : <input type="text" name="name" value="<?php echo $record->name;?>" /><br/><br/>
<input type="hiden" name="id" value="<?php echo $record->id; ?>"/><br/><br/>
EMAIL : <input type="email" name="email"  value="<?php echo $record->email;?>" /><br/>
<input type="submit" name="save" value="update"/>
</form>
</body>
</html>