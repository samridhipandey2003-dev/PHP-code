<?php


require __DIR__.'/vendor/autoload.php';
$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('id')
    ->addHeader('name')
    ->addHeader('email')
    ->addRow()
        ->addColumn('1001')
        ->addColumn('sakshi')
        ->addColumn('sakshi@gmail.com')
    ->addRow()
        ->addColumn('1002')
        ->addColumn('sam')
        ->addColumn('sam.com')
    ->addRow()
        ->addColumn('1003')
        ->addColumn('kshi')
        ->addColumn('kshi@gmail.com')
    ->display();
	?>
