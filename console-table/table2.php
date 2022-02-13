<?php
require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/data.php';
$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Sr No.')
    ->addHeader('id')
    ->addHeader('name')
    ->addHeader('email');
	$i=1;
	foreach($records as $record){
    $table->addRow()
        ->addColumn($i)
        ->addColumn($record['id'] )
        ->addColumn($record['name'])
        ->addColumn($record['email']);
		$i++;
    }
	$table->display();
	?>
