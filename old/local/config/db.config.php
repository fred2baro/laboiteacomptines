<?php
return array(
	'active' => Fuel::$env,
	'development' => 
	array(
		'type' => 'mysqli',
		'connection' => 
		array(
			'hostname' => 'mysql5-16.90',
			'database' => 'blugture_app',
			'username' => 'blugture_app',
			'password' => 'fCgKqkvK',
			'persistent' => false,
			'compress' => false,
		),
		'identifier' => '`',
		'table_prefix' => '',
		'charset' => 'utf8',
		'enable_cache' => true,
		'profiling' => true,
	),
);
