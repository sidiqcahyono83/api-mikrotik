<?php

require("koneksi-jatinegara.php");


$koneksi =  $konek;

if ($koneksi) {
    $API = $mikrotik;
   
    $ppp = $mikrotik->comm('/ppp/secret/print');

     // Hitung jumlah pengguna PPPoE yang aktif
    $jumlahActivePPP = count($ppp);
 
   

    $data = [
        'status' => 200,
        'message' => 'Koneksi berhasil',
       'jumlah_active_ppp' => $jumlahActivePPP,
        'active_ppp' => $ppp,
    ];
    echo "<script>console.log(" . json_encode($data) . ");</script>";
      echo json_encode($data);

} else {
    return 'Koneksi gagal!';


}