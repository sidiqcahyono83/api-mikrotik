<?php

require("conn.php");


$koneksi =  $konek;

if ($koneksi) {
    $API = $mikrotik;
   
    $pppSecret = $mikrotik->comm('/ppp/secret/print');

     // Hitung jumlah pengguna PPPoE yang aktif
    $jumlahpppSecret = count($pppSecret);
 
   

    $data = [
        'status' => 200,
        'message' => 'Koneksi berhasil',
       'jumlah_active_ppp' => $jumlahpppSecret,
        'active_ppp' => $pppSecret,
    ];
    echo "<script>console.log(" . json_encode($data) . ");</script>";
      echo json_encode($data);

} else {
    return 'Koneksi gagal!';
}
?>

