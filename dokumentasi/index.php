<?php include "cektanggal.php"; ?>
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

    <title>Formulir Pendaftaran Relawan Dokumentasi | Kelas Inspirasi Kediri #4</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

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
      
    </script>

    
    <script src="../../dist/js/bootstrap.js"></script>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="https://daftar.kelasinspirasikediri.org/faq.html">FAQ</a></li>
            <li role="presentation"><a target="_BLANK" href="https://daftar.kelasinspirasikediri.org/sekapur-sirih.pdf">Download Sekapur Sirih</a></li>
            <li role="presentation" class="active"><a href="http://fb.com/KIKediri">Bantuan?</a></li>
          </ul>
        </nav>
        <a href="https://daftar.kelasinspirasikediri.org"><img src="https://daftar.kelasinspirasikediri.org/images/Logo-New-Kelas-Inspirasi-kediri-21.png"></img></a>
      </div>

      <div style="margin-bottom:20px; color:#015f0e;" class="row text-center">
        <h3>Pendaftaran Relawan Dokumentasi</h3>
        <p>KI Kediri #4</p>
        <p>(<a href="" data-toggle="modal" data-target="#myModal">syarat</a>)</p>
      </div>

      <div style="margin-left:20px;margin-right:20px;" class="row">
        <form action="proses.php" method="post">
        <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#015f0e;">
          <h4><u><b>Kesediaan</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Kesediaan">Apakah Anda bersedia mengambil cuti pada Hari Inspirasi?*</label>
           <select class="form-control" id="Kesediaan" name="Kesediaan" required>
             <option value="">-- pilih --</option>
    	     <option value="Ya">Ya, saya bersedia cuti pada tanggal tersebut.</option>
    	     <option type="button"value="Tidak">Tidak, saya tidak bisa mengambil cuti pada tanggal tersebut.</option>
  	   </select>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Briefing">Apakah Anda bersedia mengikuti briefing relawan dokumentasi?*</label>
           <select class="form-control" id="Briefing" name="Briefing" required>
             <option value="">-- pilih --</option>
    	     <option value="Ya">Ya, saya bersedia mengikuti briefing relawan dokumentasi.</option>
    	     <option value="Tidak">Tidak, saya memiliki kesibukan lain.</option>
  	   </select>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Ikut">Apakah Anda pernah mengikuti Kelas Inspirasi?*</label>
           <select class="form-control" id="Ikut" name="Ikut" onchange="JoinedOrNot()" >
             <option value="">-- pilih --</option>
    	     <option value="Ya">Ya, saya pernah mengikuti Kelas Inspirasi.</option>
    	     <option value="Tidak">Tidak, ini pertama kali saya mengikuti Kelas Inspirasi.</option>
  	   </select>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="PernahIkut">Sebutkan kota yang pernah Anda ikuti</label>
           <input type="text" name="PernahIkut" class="form-control" id="PernahIkut" placeholder="Contoh : Sidoarjo, Surabaya, Malang">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="MengapaIkutLagi">Mengapa Anda ingin berpartisipasi kembali di Kelas Inspirasi?</label>
           <textarea class="form-control" name="MengapaIkutLagi" rows="4" id="MengapaIkutLagi" placeholder="Uraikan alasan Anda"></textarea>
          </div>
  	 </div>
         <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#015f0e;">
          <h4><u><b>Data Diri</b></u></h4>
          </div>
         </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <div class="row">
  	   <div class="col-md-8">
           <label for="NamaLengkap">Nama Lengkap*</label>
           <input type="text" name="NamaLengkap" class="form-control" id="NamaLengkap" placeholder="Contoh : Rido Setiawan" required>
           </div>
           <div class="col-md-4">
           <label for="Gender">Jenis Kelamin*</label>
           <select class="form-control" id="Gender" name="Gender" required>
             <option value="">-- pilih --</option>
             <option value="L">Laki-laki</option>
             <option value="P">Perempuan</option>
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
           <input type="text" name="TempatLahir" class="form-control" id="TempatLahir" placeholder="Contoh : Kediri" required>
           </div>
           <div class="col-md-6">
           <label for="TanggalLahir">Tanggal Lahir (dd-mm-yyyy)*</label>
           <input type="text" name="TanggalLahir" class="form-control" id="TanggalLahir" value="15-01-1995" required>
           </div>
           </div>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="Domisili">Alamat Domisili</label>
  	    <textarea class="form-control" rows="4" id="Domisili" name="Domisili" placeholder="Contoh : Jl Soekarno-Hatta 1 Gg Dahlia No 3 Kediri" required></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	  <div class="row">
           <div class="col-md-4">
             <label for="PendidikanTerakhir">Pendidikan Terakhir*</label>
             <select class="form-control" id="PendidikanTerakhir" name="PendidikanTerakhir" required>
               <option value="">-- pilih --</option>
               <option value="SD">SD</option>
               <option value="SMP">SMP</option>
               <option value="SMA">SMA</option>
               <option value="S1">S1</option>
               <option value="S2">S2</option>
               <option value="S3">S3</option>
             </select>
           </div>
           <div class="col-md-4">
             <label for="NamaSekolah">Sekolah/Kuliah di*</label>
             <input type="text" class="form-control" name="NamaSekolah" rows="4" id="NamaSekolah" placeholder="Contoh : UM" required>
           </div>
           <div class="col-md-4">
             <label for="LulusTahun">Lulus Tahun*</label>
             <input type="number" class="form-control" name="LulusTahun" rows="4" id="NamaSekolah" value="1996" required>
           </div>
          </div>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="HP">No HP*</label>
           <input type="text" name="HP" class="form-control" id="HP" placeholder="Format: +628523166729" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="AlamatEmail">Email*</label>
           <input type="email" name="AlamatEmail" class="form-control" id="AlamatEmail" placeholder="Contoh : rido@gmail.com" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	  <div class="row">
  	   <div class="col-md-7">
             <label for="Facebook">Akun Facebook</label>
             <input type="text" name="Facebook" class="form-control" id="Facebook" placeholder="Contoh : facebook.com/ridosetiakawan">
           </div>
           <div class="col-md-5">
             <label for="Twitter">Akun Twitter</label>
             <input type="text" name="Twitter" class="form-control" id="Twitter" placeholder="Contoh : @ridosetiakawan">
           </div>
          </div>
          </div>
  	 </div>
  	 <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#015f0e;">
          <h4><u><b>Pekerjaaan</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="TempatKerja">Tempat Bekerja Saat Ini*</label>
           <input type="text" name="TempatKerja" class="form-control" id="TempatKerja" placeholder="Tulis nama perguruan tinggi jika Anda masih kuliah." required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="PosisiKerja">Jabatan/Posisi Saat Ini*</label>
           <input type="text" name="PosisiKerja" class="form-control" id="PosisiKerja" placeholder="Tulis &#34;mahasiswa&#34; jika Anda masih kuliah" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <label for="BidangPekerjaan">Bidang Pekerjaan*</label>
  	   <select class="form-control" id="BidangPekerjaan" name="BidangPekerjaan" required>
  	     <option value=""> -- pilih -- </option>
  	     <option value="Seni, Olahraga dan Hiburan">Seni, Olahraga dan Hiburan</option>
             <option value="Pendidikan">Pendidikan</option>
             <option value="Rekayasa">Rekayasa / Teknik</option>
             <option value="Pengusaha">Pengusaha</option>
             <option value="Keuangan, Perbankan & Akuntan">Keuangan, Perbankan & Akuntan</option>
             <option value="Kesehatan dan Pengobatan">Kesehatan dan Pengobatan</option>
             <option value="Manajemen & Konsultansi">Manajemen & Konsultansi</option>
             <option value="Media & Komunikasi">Media & Komunikasi</option>
             <option value="Pelayanan Publik">Pelayanan Publik</option>
             <option value="Pemasaran & Penjualan">Pemasaran & Penjualan</option>
             <option value="Kesekretariatan">Kesekretariatan (SDM, Sekretaris, Administrasi)</option>
             <option value="Lain-lain">Lain-lain (Juru masak, Pilot, dsb)</option>
  	   </select>
  	  </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <label for="LamaBekerja">Lama Bekerja di Perusahaan Saat Ini*</label>
  	   <select class="form-control" id="LamaBekerja" name="LamaBekerja" required>
  	     <option value="">-- pilih --</option>
  	     <option value="Di bawah 2 tahun">Di Bawah 2 Tahun</option>
             <option value="2 tahun">2 Tahun</option>
             <option value="3 tahun">3 Tahun</option>
             <option value="4 tahun">4 Tahun</option>
             <option value="5 tahun">5 Tahun</option>
             <option value="6 tahun">6 Tahun</option>
             <option value="7 tahun">7 - 10 Tahun</option>
             <option value="8 tahun">11 - 20 Tahun</option>
             <option value="Di atas 20 tahun">Di atas 20 Tahun</option>
  	   </select>
  	  </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="DeskripsiPekerjaan">Deskripsi Pekerjaan*</label>
  	    <textarea class="form-control" rows="4" id="DeskripsiPekerjaan" name="DeskripsiPekerjaan" placeholder="Tulis &#34;kuliah&#34; jika Anda masih kuliah." required></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#015f0e;">
          <h4><u><b>Dokumentasi</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="Peralatan">Peralatan Dokumentasi yang Dibawa Pada Saat Hari Inspirasi</label>
           <input type="text" name="Peralatan" class="form-control" id="Peralatan" placeholder="Sebutkan peralatan dokumentasi yang akan Anda bawa. Contoh : Kamera DSLR">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="Portofolio">Berikan Link (website/Instagram/blog) yang Memuat Karya Anda</label>
  	    <textarea class="form-control" rows="4" id="Portofolio" name="Portofolio" placeholder="Pisahkan dengan koma. Contoh : link 1, link 2, link 3" required></textarea> 
  	  </div> 
  	 </div>
  	 
  	 <button type="submit" style="margin-top:10px;" class="btn btn-warning col-md-2 col-md-offset-5">Kirim</button>
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