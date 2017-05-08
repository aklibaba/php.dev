<?php

require_once 'inc/autoload.php';

try {

$cool_duck = new Animals\Duck('cool', 'blue', 'quack');
} catch (Exception $e) {
	echo $e;
}

echo $cool_duck->describe();
echo $cool_duck->make_noise();
$cool_duck->iterateProps();

defined('YII_ALPHA') or define('YII_ALPHA', strpos($_SERVER['HTTP_HOST'], '.dev') !== false);
