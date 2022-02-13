<?php include_once __DIR__.'/functions.php'?>
<html>
<head></head>
<body>
<form action="<?php echo url("registerHandler.php"); ?>" method="post" >
NAME : <input type="name" name="name"/><br/>
EMAIL : <input type="email" name="email"/><br/>
<input type="submit" value="register"/>
</form>
</body>
</html>