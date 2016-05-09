<?php

//mengambil variabel jenis relawan dan KI ke-
$relawan="rekrutpengajar";
$ki="4";

//koneksi ke database
include "konek.php";
mysql_select_db("daftarki_fasil")or die(mysql_error());
$sql="SELECT `$relawan` FROM  `pengaturan` WHERE `pengaturan`.`ki` =$ki";
$ambildata = mysql_query( $sql, $koneksi);
$tampildata = mysql_fetch_array($ambildata);
$pecah=explode("-",$tampildata[0]);
$awal=$pecah[0];
$akhir=$pecah[1];

//cek tanggal
$tanggal=date("YmdHi");
if ((int)$tanggal<(int)$awal){
header("Location: http://daftar.kelasinspirasikediri.org/info.php?pesan=1");
}else if((int)$tanggal>(int)$akhir){
header("Location: http://daftar.kelasinspirasikediri.org/info.php?pesan=2");
}else{
}

?>