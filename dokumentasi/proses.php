<?php
include "konek.php";

//kesediaan
$kesediaan=$_POST['Kesediaan'];
$briefing=$_POST['Briefing'];
$ikut=$_POST['Ikut'];
$pernahikut=$_POST['PernahIkut'];
$mengapaikutlagi=$_POST['MengapaIkutLagi'];

//data diri
$nama=ucwords(str_replace("'","&#39;", strtolower($_POST['NamaLengkap'])));
$jeniskelamin=$_POST['Gender'];
$pendidikan=$_POST['PendidikanTerakhir']."-".str_replace("'","&#39;",$_POST['NamaSekolah'])."-".$_POST['LulusTahun'];
$fb=str_replace("'","&#39;",$_POST['Facebook']);
$twitter=str_replace("'","&#39;",$_POST['Twitter']);
$email=$_POST['AlamatEmail'];
//ttl start
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
$tempatlhr=strtolower($_POST['TempatLahir']); //ttl end
$ttl=ucwords($tempatlhr).", ".$pecah[0]." ".$bulan." ".$pecah[2];
$domisili=str_replace("'","&#39;",$_POST['Domisili']);
$hp=$_POST['HP'];

//pekerjaan
$tempatkerja=str_replace("'","&#39;",$_POST['TempatKerja']);
$profesikerja=str_replace("'","&#39;",$_POST['PosisiKerja']);
$bidangkerja=$_POST['BidangPekerjaan'];
$lamakerja=$_POST['LamaBekerja'];
$deskripsikerja=str_replace("'","&#39;",$_POST['DeskripsiPekerjaan']);
$peralatan=str_replace("'","&#39;",$_POST['Peralatan']);
$portofolio=str_replace("'","&#39;",$_POST['Portofolio']);


//misc
$waktu=date("YmdHi");

//memasukkan data ke database
$sql = "INSERT INTO  `daftarki_fasil`.`dokumenter` (`kesediaan`,`briefing`,`ikut`,`pernahikut`,`mengapaikutlagi`,`nama`,`jeniskelamin`,`pendidikan`,`fb`,`twitter`,`email`,`ttl`,`domisili`,`hp`,`tempatkerja`,`profesikerja`,`bidangkerja`,`lamakerja`,`deskripsikerja`,`peralatan`,`portofolio`,`waktu`)VALUES ('$kesediaan','$briefing','$ikut','$pernahikut','$mengapaikutlagi','$nama','$jeniskelamin','$pendidikan','$fb','$twitter','$email','$ttl','$domisili','$hp','$tempatkerja','$profesikerja','$bidangkerja','$lamakerja','$deskripsikerja','$peralatan','$portofolio','$waktu')";

//cek proses penambahan data 
$tambahdata = mysql_query( $sql, $koneksi );
if(! $tambahdata )
{
  $pesan=die(mysql_error());
  die(header("Location: http://daftar.kelasinspirasikediri.org/error.php?em=2&pesan=$pesan"));
}

mysql_close($koneksi);
header("Location: http://daftar.kelasinspirasikediri.org/terimakasih.html");
?>