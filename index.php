<?php

require_once 'inc/autoload.php';
require_once 'inc/Database.php';

$database = new Database();


try {

$cool_duck = new Animals\Duck('cool', 'blue', 'quack');
} catch (Exception $e) {
	echo $e;
}

echo $cool_duck->describe();
echo $cool_duck->make_noise();
$cool_duck->iterateProps();

