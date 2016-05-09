<?php

session_start();
//cek sesi 
if(isset($_SESSION['username'])){

}else{
header("location: login.php");
}


include "konek.php";

$email=$_GET['email'];

$sql="DELETE FROM `daftarki_fasil`.`pengajar` WHERE `pengajar`.`email` = '$email'";

$hapusdata = mysql_query( $sql, $koneksi );
if(! $hapusdata )
{
  die('Gagal hapus data: ' . mysql_error());
}
mysql_close($koneksi);
header("Location: http://daftar.kelasinspirasikediri.org/admin/tampil.php?relawan=pengajar");
?>