<?php
require('routeros_api.class.php');

$ip = '192.168.46.80';
$port = 8788;
$user = 'server_sidayu';
$pass = 'kinara.network';

$mikrotik = new RouterosAPI();

$konek = $mikrotik->connect($ip, $user, $pass, $port);


?>
