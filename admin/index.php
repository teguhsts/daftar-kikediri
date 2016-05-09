<?php
session_start();
//cek sesi 
if(isset($_SESSION['username'])){
header("location: tampil.php");
}else{
header("location: login.php");
}
?>