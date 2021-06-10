<?php

$users_array = array("users" => array(
    1 => array(
        'email' => 'admin@gmail.com',
		'password' => 1234
    ),
    2 => array(
        'email' => 'leo@gmail.com',
		'password' => 5678
	)));

$users_json = json_encode($users_array);
$handler = fopen("data/user.json", "w+");
fwrite($handler, $users_json);
fclose($handler);
