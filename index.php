<?php

require_once 'inc/autoload.php';
require_once 'inc/Database.php';

$database = new Database();
$query = 'SELECT * FROM posts';
$database->query($query);
$posts = $database->result_set();

foreach ($posts as $key=>$post) {
	echo "Post nr $key <br>";
	echo $post['title'] . '<br>';
	echo $post['body'] . '<br>';
}

try {

$cool_duck = new Animals\Duck('cool', 'blue', 'quack');
} catch (Exception $e) {
	echo $e;
}

echo $cool_duck->describe();
echo $cool_duck->make_noise();
$cool_duck->iterateProps();

