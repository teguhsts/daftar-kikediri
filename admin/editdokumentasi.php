<?php
session_start();

//cek sesi 
if(isset($_SESSION['username'])){
}else{
header("location: login.php");
}

//kalau sudah login lanjut eksekusi ini
$email=$_GET['email'];
include "konek.php";
$db = mysql_select_db("daftarki_fasil",$koneksi);
$sql = "select * from `daftarki_fasil`.`dokumenter` WHERE `dokumenter`.`email` = '$email'"; 
$hasil = mysql_query($sql,$koneksi);
$tampil = mysql_fetch_array($hasil);
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
$pecahpendidikan=explode("-",$tampil['pendidikan']);
$pecahorg=explode("_",$tampil['organisasi']);
$pecahorgl=explode("_",$tampil['organisasilain']);
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

    <title>Calon Relawan Dokumentasi | Kelas Inspirasi Kediri #4</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://daftar.kelasinspirasikediri.org/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <link rel="stylesheet" type="text/css" href="../../dist/dp/jquery-ui-1.9.1.custom.min.css" />
                              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                              <script type="text/javascript" src="../../dist/dp/jquery-ui-1.9.1.custom.min.js" charset="utf-8"></script>
                              <script type="text/javascript" src="../../dist/dp/query-ui-i18n.min.js" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      jQuery( document ).ready( function() {
      jQuery.datepicker.setDefaults (
      jQuery.extend( jQuery.datepicker.regional[ '' ] )
      );
      jQuery( '#TanggalLahir' ).datepicker({
      dateFormat: "dd-mm-yy"
      });
      });
      
      <!--fungsi disable input kota yang pernah diikuti-->
      function JoinedOrNot(){
      var cat = document.getElementById("Ikut");
      if(cat.value == "Ya"){
        document.getElementById("PernahIkut").disabled = false;
        document.getElementById("MengapaIkutLagi").disabled = false;
      }else{
        document.getElementById("PernahIkut").disabled = true;
        document.getElementById("MengapaIkutLagi").disabled = true;
      }
      }
      
      <!-- fungsi konfirmasi penghapusan -->
      function konfirmasi()
        {
         tanya = confirm("Btw, ente yakin mau menghapus data ini ?");
         if (tanya == true) return true;
         else return false;
        }
    </script>

    
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

      <div style="margin-bottom:20px;color:#DD4814;" class="row text-center">
        <h3>Calon Relawan Dokumentasi</h3>
        <p>KI Kediri #4</p>
        <p>(<a href="" data-toggle="modal" data-target="#myModal">syarat</a>)</p>
      </div>

      <div style="margin-left:20px;margin-right:20px;" class="row">
        <form action="prosesdokumentasi.php" method="post">
        <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
          <h4><u><b>Kesediaan</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Status">Status <img src="images/update.gif"></label><?php if($tampil['status']=="1"){$stat1="selected";}else if($tampil['status']=="0"){$stat0="selected";}else{$statbelum="selected";}?>
           <select class="form-control" id="Status" name="Status" >
             <option value="" <?php echo $statbelum;?>>-- pilih --</option>
    	     <option value="1"  <?php echo $stat1;?>>Diterima</option>
    	     <option value="0"<?php echo $stat0;?>>Tidak diterima</option>
    	     
  	   </select>
          </div>
  	 </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Kesediaan">Apakah Anda bersedia mengambil cuti pada Hari Inspirasi?*</label><?php if($tampil['kesediaan']=="Ya"){$ya="selected";}else{$tidak="selected";}?>
           <select class="form-control" id="Kesediaan" name="Kesediaan" required>
             <option value="">-- pilih --</option>
    	     <option value="Ya" <?php echo $ya;?>>Ya, saya bersedia cuti pada tanggal tersebut.</option>
    	     <option value="Tidak"<?php echo $tidak;?>>Tidak, saya tidak bisa mengambil cuti pada tanggal tersebut.</option>
  	   </select>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Briefing">Apakah Anda bersedia mengikuti briefing relawan dokumentasi?*</label><?php if($tampil['briefing']=="Ya"){$ya="selected";}else{$tidak="selected";}?>
           <select class="form-control" id="Briefing" name="Briefing" required>
             <option value="">-- pilih --</option>
    	     <option value="Ya" <?php echo $ya;?>>Ya, saya bersedia mengikuti briefing relawan dokumentasi.</option>
    	     <option value="Tidak" <?php echo $tidak;?>>Tidak, saya memiliki kesibukan lain.</option>
  	   </select>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Ikut">Apakah Anda pernah mengikuti Kelas Inspirasi?*</label><?php if($tampil['ikut']=="Ya"){$ya="selected";}else{$tidak="selected";}?>
           <select class="form-control" id="Ikut" name="Ikut" onchange="JoinedOrNot()" >
             <option value="">-- pilih --</option>
    	     <option value="Ya" <?php echo $ya;?>>Ya, saya pernah mengikuti Kelas Inspirasi.</option>
    	     <option value="Tidak" <?php echo $tidak;?>>Tidak, ini pertama kali saya mengikuti Kelas Inspirasi.</option>
  	   </select>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="PernahIkut">Sebutkan kota yang pernah Anda ikuti</label>
           <input type="text" name="PernahIkut" class="form-control" id="PernahIkut" value="<?php echo $tampil['pernahikut'];?>">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="MengapaIkutLagi">Mengapa Anda ingin berpartisipasi kembali di Kelas Inspirasi?</label>
           <textarea class="form-control" name="MengapaIkutLagi" rows="4" id="MengapaIkutLagi" placeholder="Uraikan alasan Anda"><?php echo $tampil['mengapaikutlagi'];?></textarea>
          </div>
  	 </div>
         <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
          <h4><u><b>Data Diri</b></u></h4>
          </div>
         </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <div class="row">
  	   <div class="col-md-8">
           <label for="NamaLengkap">Nama Lengkap*</label>
           <input type="text" name="NamaLengkap" class="form-control" id="NamaLengkap" value="<?php echo $tampil['nama'];?>" required>
           </div>
           <div class="col-md-4">
           <label for="Gender">Jenis Kelamin*</label><?php if($tampil['jeniskelamin']=="L"){$laki="selected";}else{$per="selected";}?>
           <select class="form-control" id="Gender" name="Gender" required>
             <option value="">-- pilih --</option>
             <option value="L" <?php echo $laki;?>>Laki-laki</option>
             <option value="P" <?php echo $per;?>>Perempuan</option>
           </select>
           </div>
           </div>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <div class="row">
  	   <div class="col-md-6">
           <label for="TempatLahir">Tempat Lahir*</label>
           <input type="text" name="TempatLahir" class="form-control" id="TempatLahir" value="<?php echo $tempatlahir;?>" required>
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
  	    <label for="Domisili">Alamat Domisili</label>
  	    <textarea class="form-control" rows="4" id="Domisili" name="Domisili" required><?php echo $tampil['domisili'];?></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	  <div class="row">
           <div class="col-md-4">
             <label for="PendidikanTerakhir">Pendidikan Terakhir*</label>
             <select class="form-control" id="PendidikanTerakhir" name="PendidikanTerakhir" required><?php if($pecahpendidikan['0']=="SD"){$sd="selected";}else if($pecahpendidikan['0']=="SMP"){$smp="selected";}else if($pecahpendidikan['0']=="SMA"){$sma="selected";}else if($pecahpendidikan['0']=="S1"){$s1="selected";}else if($pecahpendidikan['0']=="S2"){$s2="selected";}else {$s3="selected";}?>
               <option value="">-- pilih --</option>
               <option value="SD" <?php echo $sd; ?>>SD</option>
               <option value="SMP" <?php echo $smp; ?>>SMP</option>
               <option value="SMA" <?php echo $sma; ?>>SMA</option>
               <option value="S1" <?php echo $s1; ?>>S1</option>
               <option value="S2" <?php echo $s2; ?>>S2</option>
               <option value="S3" <?php echo $s3; ?>>S3</option>
             </select>
           </div>
           <div class="col-md-4">
             <label for="NamaSekolah">Sekolah/Kuliah di*</label>
             <input type="text" class="form-control" name="NamaSekolah" rows="4" id="NamaSekolah" value="<?php echo $pecahpendidikan['1'];?>" required>
           </div>
           <div class="col-md-4">
             <label for="LulusTahun">Lulus Tahun*</label>
             <input type="number" class="form-control" name="LulusTahun" rows="4" id="NamaSekolah" value="<?php echo $pecahpendidikan['2'];?>" required>
           </div>
          </div>
          </div>
  	 </div>
  	 <div class="row">
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
  	  <div class="row">
  	   <div class="col-md-7">
             <label for="Facebook">Akun Facebook</label>
             <input type="text" name="Facebook" class="form-control" id="Facebook" value="<?php echo $tampil['fb'];?>">
           </div>
           <div class="col-md-5">
             <label for="Twitter">Akun Twitter</label>
             <input type="text" name="Twitter" class="form-control" id="Twitter" value="<?php echo $tampil['twitter'];?>">
           </div>
          </div>
          </div>
  	 </div>
  	 <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
          <h4><u><b>Pekerjaaan</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="TempatKerja">Tempat Bekerja Saat Ini*</label>
           <input type="text" name="TempatKerja" class="form-control" id="TempatKerja" value="<?php echo $tampil['tempatkerja'];?>" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="PosisiKerja">Jabatan/Posisi Saat Ini*</label>
           <input type="text" name="PosisiKerja" class="form-control" id="PosisiKerja" value="<?php echo $tampil['profesikerja'];?>" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <label for="BidangPekerjaan">Bidang Pekerjaan*</label><?php if ($tampil['bidangkerja']=="Seni, Olahraga dan Hiburan"){$bk1="selected";}else if($tampil['bidangkerja']=="Pendidikan"){$bk2="selected";}else if($tampil['bidangkerja']=="Rekayasa"){$bk3="selected";}else if($tampil['bidangkerja']=="Pengusaha"){$bk4="selected";}else if($tampil['bidangkerja']=="Keuangan, Perbankan & Akuntan"){$bk5="selected";}else if($tampil['bidangkerja']=="Kesehatan dan Pengobatan"){$bk6="selected";}else if($tampil['bidangkerja']=="Manajemen & Konsultansi"){$bk7="selected";}else if($tampil['bidangkerja']=="Media & Komunikasi"){$bk8="selected";}else if($tampil['bidangkerja']=="Pelayanan Publik"){$bk9="selected";}else if($tampil['bidangkerja']=="Pemasaran & Penjualan"){$bk10="selected";}else if($tampil['bidangkerja']=="Kesekretariatan"){$bk11="selected";}else if($tampil['bidangkerja']=="Lain-lain"){$bk12="selected";}else{$bk13="selected";}?>
  	   <select class="form-control" id="BidangPekerjaan" name="BidangPekerjaan" required>
  	     <option value="" <?php echo $bk13;?>> -- pilih -- </option>
  	     <option value="Seni, Olahraga dan Hiburan" <?php echo $bk1;?>>Seni, Olahraga dan Hiburan</option>
             <option value="Pendidikan" <?php echo $bk2;?>>Pendidikan</option>
             <option value="Rekayasa" <?php echo $bk3;?>>Rekayasa / Teknik</option>
             <option value="Pengusaha" <?php echo $bk4;?>>Pengusaha</option>
             <option value="Keuangan, Perbankan & Akuntan" <?php echo $bk5;?>>Keuangan, Perbankan & Akuntan</option>
             <option value="Kesehatan dan Pengobatan" <?php echo $bk6;?>>Kesehatan dan Pengobatan</option>
             <option value="Manajemen & Konsultansi" <?php echo $bk7;?>>Manajemen & Konsultansi</option>
             <option value="Media & Komunikasi" <?php echo $bk8;?>>Media & Komunikasi</option>
             <option value="Pelayanan Publik" <?php echo $bk9;?>>Pelayanan Publik</option>
             <option value="Pemasaran & Penjualan" <?php echo $bk10;?>>Pemasaran & Penjualan</option>
             <option value="Kesekretariatan" <?php echo $bk11;?>>Kesekretariatan (SDM, Sekretaris, Administrasi)</option>
             <option value="Lain-lain" <?php echo $bk12;?>>Lain-lain (Juru masak, Pilot, dsb)</option>
  	   </select>
  	  </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <label for="LamaBekerja">Lama Bekerja di Perusahaan Saat Ini*</label><?php if ($tampil['lamakerja']=="Di bawah 2 tahun"){$lk1="selected";}else if($tampil['lamakerja']=="2 tahun"){$lk2="selected";}else if($tampil['lamakerja']=="3 tahun"){$lk3="selected";}else if($tampil['lamakerja']=="4 tahun"){$lk4="selected";}else if($tampil['lamakerja']=="5 tahun"){$lk5="selected";}else if($tampil['lamakerja']=="6 tahun"){$lk6="selected";}else if($tampil['lamakerja']=="7 tahun"){$lk7="selected";}else if($tampil['lamakerja']=="8 tahun"){$lk8="selected";}else if($tampil['lamakerja']=="Di atas 20 tahun"){$lk9="selected";}else{$lk10="selected";}?>
  	   <select class="form-control" id="LamaBekerja" name="LamaBekerja" required>
  	     <option value="" <?php echo $lk10;?>>-- pilih --</option>
  	     <option value="Di bawah 2 tahun" <?php echo $lk1;?>>Di Bawah 2 Tahun</option>
             <option value="2 tahun" <?php echo $lk2;?>>2 Tahun</option>
             <option value="3 tahun" <?php echo $lk3;?>>3 Tahun</option>
             <option value="4 tahun" <?php echo $lk4;?>>4 Tahun</option>
             <option value="5 tahun" <?php echo $lk5;?>>5 Tahun</option>
             <option value="6 tahun" <?php echo $lk6;?>>6 Tahun</option>
             <option value="7 tahun" <?php echo $lk7;?>>7 - 10 Tahun</option>
             <option value="8 tahun" <?php echo $lk8;?>>11 - 20 Tahun</option>
             <option value="Di atas 20 tahun"<?php echo $lk9;?>>Di atas 20 Tahun</option>
  	   </select>
  	  </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="DeskripsiPekerjaan">Deskripsi Pekerjaan*</label>
  	    <textarea class="form-control" rows="4" id="DeskripsiPekerjaan" name="DeskripsiPekerjaan"  required><?php echo $tampil['deskripsikerja'];?></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#015f0e;">
          <h4><u><b>Dokumentasi</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Peralatan">Peralatan Dokumentasi yang Dimiliki</label>
           <input type="text" name="Peralatan" class="form-control" id="Peralatan" value="<?php echo $tampil['peralatan'];?>">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="Portofolio">Berikan Link (website/Instagram/blog) yang Memuat Karya Anda</label>
  	    <textarea class="form-control" rows="4" id="Portofolio" name="Portofolio" required><?php echo $tampil['portofolio'];?></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
  	 <div class="form-group col-md-6 col-md-offset-3">
  	 <a type="cancel" style="margin-top:10px;padding-left:20px;padding-right:20px;" class="btn btn-default" href="tampil.php?relawan=dokumentasi">Batal</a>
  	 <button type="submit" style="margin-left:20px;margin-top:10px;padding-left:20px;padding-right:20px;" class="btn btn-warning">Simpan</button>
  	 <a type="cancel" onclick="return konfirmasi()" style="margin-left:20px;margin-top:10px;padding-left:20px;padding-right:20px;" class="btn btn-danger" href="hapusdokumentasi.php?email=<?php echo $tampil['email'];?>">Hapus</a>
  	 </div>
  	 </div>
	</form>
      </div>
      

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Syarat Relawan Dokumentasi</h4>
      </div>
      <div class="modal-body">
        <p>- Usia minimal 18 tahun</p>
        <p>- Membawa peralatan sendiri</p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--end modal-->

      <footer style="margin-top:50px;" class="footer">
        <p>&copy; 2016 Kelas Inspirasi Kediri.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    
    
  </body>
</html>