<?php

require 'lib/WS.php';

$_ws = new WS();


$_ws->username = 'ISIKAN USERNAME ADMIN PT';
$_ws->password = 'ISIKAN PASSWORD ADMIN PT';

$_ws->url = 'http://localhost:8082/ws/';

$data = [
	'act' => 'GetToken',
	'username' => $_ws->username,
	'password' => $_ws->password
];

$_result = json_decode($_ws->execute($data));

$_token = $_result->data->token;

$fungsi = $_GET['fungsi'];

$dict = [
    'act' => 'GetDictionary',
    'token' => $_token,
    'fungsi' => $fungsi
];

$_dict = json_decode($_ws->execute($dict));
echo "<pre>";
print_r($_dict);
echo "</pre>";

?>