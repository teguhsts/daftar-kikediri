<?php
$dbhost = 'localhost';
$dbuser = 'daftarki_fasil';
$dbpass = 'Welcome123';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
?>