<?php

$data = array(

'name'=>'Sakshi',
'class'=>'Diploma',
'rollno'=>1001

);

echo <<<'FROM'
<h1>student From</h1>
<hr/>
<form>
   <p>
   Name:<input type="text" value="{$data['name']}">
   </p>
      <p>
   Class:<input type="text" value="{$data['class']}">
   </p>
   <p>
   Rollno:<input type="text" value="{$data['rollno']}">
   </p>
</form>
FROM;