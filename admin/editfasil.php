<?php
session_start();
//cek sesi 
if(isset($_SESSION['username'])){

}else{
header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="https://daftar.kelasinspirasikediri.org/images/favicon.png">

    <title>Admin Area | Kelas Inspirasi Kediri #4</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <link rel="stylesheet" type="text/css" href="../../dist/dp/jquery-ui-1.9.1.custom.min.css" />
                              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                              
    <script src="../../dist/js/bootstrap.js"></script>


  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="tampil.php">Lihat Daftar</a></li>
            <li role="presentation"><a href="gantipassword.php">Ganti Password</a></li>
            <li role="presentation" class="active"><a href="logout.php">Log Out</a></li>
          </ul>
        </nav>
        <a href="https://daftar.kelasinspirasikediri.org"><img src="https://daftar.kelasinspirasikediri.org/images/Logo-New-Kelas-Inspirasi-kediri-21.png"></img></a>
      </div>

<div style="margin-bottom:20px;" class="row text-center">
        <h3>Edit Fasil</h3>
        <p>KI Kediri #4</p>
      </div>

      <div style="margin-left:20px;margin-right:20px;" class="row">
        <form action="peditfasil.php" method="post">
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="NamaLengkap">Nama Lengkap*</label>
<?php
include "konek.php";
$email=$_GET['email'];
$sql="SELECT * FROM `daftarki_fasil`.`fasil` WHERE `fasil`.`email` = '$email'";
$edit = mysql_query( $sql, $koneksi );
if(! $edit )
{
  die('Gagal edit data: ' . mysql_error());
}
$tampil = mysql_fetch_array($edit);
$pecah=explode(",",$tampil['ttl']);
$tempatlahir=$pecah[0];
$pecahtanggal=explode(" ",$pecah[1]);
if ($pecahtanggal[2]=="Januari"){
$bulan="01";
}else if ($pecahtanggal[2]=="Februari"){
$bulan="02";
}else if ($pecahtanggal[2]=="Maret"){
$bulan="03";
}else if ($pecahtanggal[2]=="April"){
$bulan="04";
}else if ($pecahtanggal[2]=="Mei"){
$bulan="05";
}else if ($pecahtanggal[2]=="Juni"){
$bulan="06";
}else if ($pecahtanggal[2]=="Juli"){
$bulan="07";
}else if ($pecahtanggal[2]=="Agustus"){
$bulan="08";
}else if ($pecahtanggal[2]=="September"){
$bulan="09";
}else if ($pecahtanggal[2]=="Oktober"){
$bulan="10";
}else if ($pecahtanggal[2]=="November"){
$bulan="11";
}else if ($pecahtanggal[2]=="Desember"){
$bulan="12";
}else{
echo $pecahtanggal[1];
}
?>
           <input type="text" name="NamaLengkap" class="form-control" id="NamaLengkap" value="<?php echo $tampil['nama']; ?>" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <div class="row">
  	   <div class="col-md-6">
           <label for="TempatLahir">Tempat Lahir*</label>
           <input type="text" name="TempatLahir" class="form-control" id="TempatLahir" value=<?php echo $tempatlahir; ?> required>
           </div>
           <div class="col-md-6">
           <label for="TanggalLahir">Tanggal Lahir (dd-mm-yyyy)*</label>
           <input type="text" name="TanggalLahir" class="form-control" id="TanggalLahir" value="<?php echo $pecahtanggal[1]."-".$bulan."-".$pecahtanggal[3]; ?>" required>
           </div>
           </div>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Domisili">Domisili</label>
           <textarea class="form-control" name="Domisili" rows="4" id="Domisili" ><?php echo $tampil['domisili'];?></textarea>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Profesi">Profesi</label>
           <input type="text" name="Profesi" class="form-control" id="Profesi" value="<?php echo $tampil['profesi'];?>">
          </div>
  	 </div><div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="HP">No HP*</label>
           <input type="text" name="HP" class="form-control" id="HP" value="<?php echo $tampil['hp'];?>" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="AlamatEmail">Email*</label>
           <input type="email" name="AlamatEmail" class="form-control" id="AlamatEmail" value="<?php echo $tampil['email'];?>" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Divisi">Divisi yang Anda pilih <small>(<a href="" data-toggle="modal" data-target="#myModal">jobdesc</a>)</small></label>
           <select class="form-control" name="Divisi" id="Divisi" value="<?php echo $tampil['divisi'];?>">
<?php
if ($tampil['divisi']=="VR"){
$vr="selected";
$er=" ";
$scr=" ";
$meddok=" ";
}else if($tampil['divisi']=="ER"){
$vr=" ";
$er="selected";
$scr=" ";
$meddok=" ";
}else if($tampil['divisi']=="SCR"){
$vr=" ";
$er=" ";
$scr="selected";
$meddok=" ";
}else if($tampil['divisi']=="Meddok"){
$vr=" ";
$er=" ";
$scr=" ";
$meddok="selected";
}else{
echo "tidak diketahui";
}
?>
  		<option value="" >-- Pilih --</option>
  		<option value="VR" <?php echo $vr;?> >Volunteer Relations - Recruitment (VR)</option>
  		<option value="ER" <?php echo $er;?> >External Relations (ER)</option>
  		<option value="SCR" <?php echo $scr;?> >School Relations (SCR)</option>
  		<option value="Meddok" <?php echo $meddok;?> >Media, Design, and Documentation (Meddok)</option>
	   </select>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Motivasi">Motivasi</label>
           <textarea class="form-control" name="Motivasi" rows="5" id="Motivasi" ><?php echo $tampil['motivasi'];?></textarea>
          </div>
  	 </div>
  	 <div class="row">
  	 <div class="col-md-4 col-md-offset-4">
  	 <a href="tampil.php" class="btn btn-default" role="button" style="margin-top:10px;margin-right:10px;padding:8px 20px;" >Batal</a>
  	 <button type="submit" style="margin-top:10px;" class="btn btn-warning">Simpan</button>
  	 </div>
  	 </div>
	</form>
      </div>
      
      <footer style="margin-top:250px;" class="footer">
        <p>&copy; 2016 Kelas Inspirasi Kediri.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    
    
  </body>
</html>