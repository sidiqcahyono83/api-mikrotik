<?php
require('routeros_api.class.php');

$ip = '103.131.19.55';
$port = 8788;
$user = 'KIN';
$pass = 'wahyupajero';

$mikrotik = new RouterosAPI();

$konek = $mikrotik->connect($ip, $user, $pass, $port);


?>
