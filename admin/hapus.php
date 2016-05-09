<?php

//cek sesi
session_start();
if(isset($_SESSION['username'])){
}else{
header("location: login.php");
}

//ambil data
$relawan=$_GET['relawan'];
$email=$_GET['email'];

//seleksi
if ($relawan=="fasil"){
header ("Location: http://daftar.kelasinspirasikediri.org/admin/hapusfasil.php?email=$email");
}else if($relawan=="pengajar"){
header ("Location: http://daftar.kelasinspirasikediri.org/admin/hapuspengajar.php?email=$email");
}else if($relawan=="dokumentasi"){
header ("Location: http://daftar.kelasinspirasikediri.org/admin/hapusdok.php?email=$email");
}else{
echo "Tidak ada yg dihapus";
}

?>