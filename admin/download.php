<?php
// Fungsi header dengan mengirimkan raw data excel
$relawan=$_GET['relawan'];
if ($relawan=="fasil"){
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=fasil.xls");
include 'datafasil.php';
}else if($relawan=="pengajar"){
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pengajar.xls");
include 'datapengajar.php';
}else if($relawan=="dokumentasi"){
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=dokumentator.xls");
include 'datadok.php';
}else{
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=fasil.xls");
include 'datafasil.php';
}
?>