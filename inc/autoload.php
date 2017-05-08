<?php

function autoloader($class_name) {
	$filename = "{$class_name}.php";

	if (!file_exists($filename))
		throw new Exception("$class_name not found so not loaded");

	include_once $filename;
}

spl_autoload_register('autoloader');
