<?php
require('routeros_api.class.php');

$ip = '12.13.14.6';
$port = 8788;
$user = 'server_somagede';
$pass = 'kinara.network';

$mikrotik = new RouterosAPI();

$konek = $mikrotik->connect($ip, $user, $pass, $port);


?>
