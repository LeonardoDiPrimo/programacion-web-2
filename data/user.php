<?php
$users = array(
	'1' => array (
		'email' => 'admin@gmail.com',
		'password' => 1234
));

$users_json = json_encode($users);
$handler = fopen("../data/user.json", "w+");
fwrite($handler, $users_json);
fclose($handler);
