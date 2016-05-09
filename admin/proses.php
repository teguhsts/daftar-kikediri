<?php
session_start(); // Memulai Session
include "konek.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM `daftarki_fasil`.`admin` WHERE `admin`.`username` = '$username' AND `admin`.`password` = '$password'";
$query=mysql_query($sql);
$row=mysql_num_rows($query);
if ($row==1){
$_SESSION['username'] = $username;
header("location: tampil.php");
}else{
header("location: login.php?em=p");
}
?>