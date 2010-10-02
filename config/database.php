<?php
class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'dev',
		'password' => 'dev',
		'database' => 'cms',
		'prefix' => '',
	);

	var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'dev',
		'password' => 'dev',
		'database' => 'test_cms',
		'prefix' => '',
	);
}
