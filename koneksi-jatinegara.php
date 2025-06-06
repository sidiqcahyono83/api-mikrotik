<?php
require('routeros_api.class.php');

$ip = '192.168.46.90';
$port = 8788;
$user = 'server_jatinegara';
$pass = 'kinara.network';

$mikrotik = new RouterosAPI();

$konek = $mikrotik->connect($ip, $user, $pass, $port);


?>
