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
header ("Location: http://daftar.kelasinspirasikediri.org/admin/editfasil.php?email=$email");
}else if($relawan=="pengajar"){
header ("Location: http://daftar.kelasinspirasikediri.org/admin/editpengajar.php?email=$email");
}else if($relawan=="dokumentasi"){
header ("Location: http://daftar.kelasinspirasikediri.org/admin/editdok.php?email=$email");
}else{
echo "Tidak ada yg dihapus";
}

?>