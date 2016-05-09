<?php
include "konek.php";
$password1=$_POST['password1'];
$password=$_POST['password'];
if ($password1==$password){

$sqldel="DELETE FROM `daftarki_fasil`.`admin` WHERE `admin`.`username` = 'admin'";
$sql= "INSERT INTO `daftarki_fasil`.`admin` (`username`, `password`) VALUES ('admin', '$password')";

$querydel=mysql_query($sqldel);
$query=mysql_query($sql);

header ('location: logout.php');
}else{
echo "Password tidak sama";
}
?>