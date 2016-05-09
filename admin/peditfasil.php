<?php

//cek sesi
session_start();
if(isset($_SESSION['username'])){
}else{
header("location: login.php");
}

include "konek.php";
$email=$_POST['AlamatEmail'];

//hapus data lama
$sqldel="DELETE FROM `daftarki_fasil`.`fasil` WHERE `fasil`.`email` = '$email'";
$querydel=mysql_query($sqldel);

$namakecil=strtolower($_POST['NamaLengkap']); //dijadikan huruf kecil semua
$nama1=str_replace("'","&#39;", $namakecil);
$nama=ucwords($nama1); //huruf pertama baru diubah mjd huruf besar
$domisili=str_replace("'","&#39;",$_POST['Domisili']);
$profesi=str_replace("'","&#39;",$_POST['Profesi']);
$hp=$_POST['HP'];

$motivasi=str_replace("'","&#39;",$_POST['Motivasi']);
$divisi=$_POST['Divisi'];
//tanggal lahir
$tanggal=$_POST['TanggalLahir'];
$pecah = explode("-", $tanggal);
if ($pecah[1]=="01"){
$bulan="Januari";
}else if($pecah[1]=="1"){
$bulan = "Januari";
}else if($pecah[1]=="02"){
$bulan = "Februari";
}else if($pecah[1]=="2"){
$bulan = "Februari";
}else if($pecah[1]=="03"){
$bulan = "Maret";
}else if($pecah[1]=="3"){
$bulan = "Maret";
}else if($pecah[1]=="04"){
$bulan = "April";
}else if($pecah[1]=="4"){
$bulan = "April";
}else if($pecah[1]=="05"){
$bulan = "Mei";
}else if($pecah[1]=="5"){
$bulan = "Mei";
}else if($pecah[1]=="06"){
$bulan = "Juni";
}else if($pecah[1]=="6"){
$bulan = "Juni";
}else if($pecah[1]=="07"){
$bulan = "Juli";
}else if($pecah[1]=="7"){
$bulan = "Juli";
}else if($pecah[1]=="08"){
$bulan = "Agustus";
}else if($pecah[1]=="8"){
$bulan = "Agustus";
}else if($pecah[1]=="09"){
$bulan = "September";
}else if($pecah[1]=="9"){
$bulan = "September";
}else if($pecah[1]=="10"){
$bulan = "Oktober";
}else if($pecah[1]=="11"){
$bulan = "November";
}else if($pecah[1]=="12"){
$bulan = "Desember";
}else{
header("Location: http://daftar.kelasinspirasikediri.org/error.php?em=1");
}

$tempatlhr=strtolower($_POST['TempatLahir']);
$ttl=ucwords($tempatlhr).", ".$pecah[0]." ".$bulan." ".$pecah[2];

//memasukkan data ke database
$sql = "INSERT INTO  `daftarki_fasil`.`fasil` (`nama` ,`email` ,`ttl` ,`domisili` ,`profesi` ,`hp` ,`motivasi`, `divisi`)VALUES ('$nama',  '$email',  '$ttl',  '$domisili', '$profesi',  '$hp',  '$motivasi', '$divisi')";

//cek proses penambahan data 
$tambahdata = mysql_query( $sql, $koneksi );
if(! $tambahdata )
{
  die(header("Location: http://daftar.kelasinspirasikediri.org/error.php?em=2")); //jika terjadi kesalahan langsung menuju ke halaman error v 0.0.002.2.16
}

mysql_close($koneksi);
header("Location: http://daftar.kelasinspirasikediri.org/admin/tampil.php");



?>