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

    <title>Formulir Pendaftaran Relawan Pengajar | Kelas Inspirasi Kediri #4</title>

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

      <div style="margin-bottom:20px;color:#DD4814;" class="row text-center">
        <h3>Pendaftaran Relawan Pengajar</h3>
        <p>KI Kediri #4</p>
        <p>(<a href="" data-toggle="modal" data-target="#myModal">syarat</a>)</p>
      </div>

      <div style="margin-left:20px;margin-right:20px;" class="row">
        <form action="proses.php" method="post">
        <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
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
           <label for="Briefing">Apakah Anda bersedia mengikuti briefing relawan pengajar?*</label>
           <select class="form-control" id="Briefing" name="Briefing" required>
             <option value="">-- pilih --</option>
    	     <option value="Ya">Ya, saya bersedia mengikuti briefing relawan pengajar.</option>
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
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
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
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
          <h4><u><b>Pekerjaaan</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="TempatKerja">Tempat Bekerja Saat Ini*</label>
           <input type="text" name="TempatKerja" class="form-control" id="TempatKerja" placeholder="Contoh : PT Sosis Jaya Selamanya" required>
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="PosisiKerja">Jabatan/Posisi Saat Ini*</label>
           <input type="text" name="PosisiKerja" class="form-control" id="PosisiKerja" placeholder="Contoh : Kepala Gudang" required>
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
  	    <textarea class="form-control" rows="4" id="DeskripsiPekerjaan" name="DeskripsiPekerjaan" placeholder="Deskripsikan pekerjaan Anda" required></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="TempatKerjaLama">Tempat Bekerja Sebelumnya</label>
           <input type="text" name="TempatKerjaLama" class="form-control" id="TempatKerjaLama" placeholder="Contoh : PT Roti Segar Jaya">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="PosisiKerjaLama">Jabatan/Posisi Sebelumnya</label>
           <input type="text" name="PosisiKerjaLama" class="form-control" id="PosisiKerjaLama" placeholder="Contoh : Manager Gudang">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	   <label for="LamaBekerjaLama">Lama Bekerja di Perusahaan Sebelumnya</label>
  	   <select class="form-control" id="LamaBekerjaLama" name="LamaBekerjaLama">
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
  	   <label for="LamaBekerjaTotal">Lama Bekerja Total (di Luar Masa Kuliah)</label>
  	   <select class="form-control" id="LamaBekerjaTotal" name="LamaBekerjaTotal">
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
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
          <h4><u><b>Organisasi</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="NamaOrganisasi">Nama Organisasi yang Diikuti Saat Ini</label>
           <input type="text" name="NamaOrganisasi" class="form-control" id="NamaOrganisasi" placeholder="Contoh : Komunitas Blogger Kediri">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="JabatanOrganisasi">Jabatan Dalam Organisasi</label>
           <input type="text" name="JabatanOrganisasi" class="form-control" id="JabatanOrganisasi" placeholder="Contoh : Wakil Ketua">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="AktivitasOrganisasi">Aktivitas Organisasi</label>
  	    <textarea class="form-control" rows="4" id="AktivitasOrganisasi" name="AktivitasOrganisasi" placeholder="Jelaskan aktivitas organisasi yang Anda ikuti." required></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="NamaOrganisasiLain">Nama Organisasi yang Lain</label>
           <input type="text" name="NamaOrganisasiLain" class="form-control" id="NamaOrganisasiLain" placeholder="Contoh : Komunitas Kuliner Kediri">
          </div>
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
           <label for="JabatanOrganisasiLain">Jabatan Dalam Organisasi yang Lain</label>
           <input type="text" name="JabatanOrganisasiLain" class="form-control" id="JabatanOrganisasiLain" placeholder="Contoh : Anggota">
          </div>
  	 </div>
  	 <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
          <h4><u><b>Prestasi</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="Prestasi">Prestasi yang Pernah Dicapai</label>
  	    <textarea class="form-control" rows="4" id="Prestasi" name="Prestasi" placeholder="Sebutkan prestai-prestasi yang pernah Anda raih."></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
          <div class="form-group col-md-10 col-md-offset-1" style="color:#DD4814;">
          <h4><u><b>Motivasi</b></u></h4>
          </div>
         </div>
         <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="Motivasi">Mengapa Anda Ingin Bergabung dengan Kelas Inspirasi?*</label>
  	    <textarea class="form-control" rows="4" id="Motivasi" name="Motivasi" placeholder="Jelaskan motivasi apa yang mendorong Anda bergabung dengan Kelas Inspirasi" required></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="Peran">Apa Peran Profesi dan Kegiatan Anda Terhadap Kehidupan Bermasyarakat?*</label>
  	    <textarea class="form-control" rows="4" id="Peran" name="Peran" placeholder="Jelaskan peranan profesi Anda bagi masyarakat" required></textarea> 
  	  </div> 
  	 </div>
  	 <div class="row">
  	  <div class="form-group col-md-10 col-md-offset-1">
  	    <label for="Cerita">Ceritakanlah Kejadian Paling Mengesankan Semasa Anda Menjalani Pendidikan*</label>
  	    <textarea class="form-control" rows="4" id="Cerita" name="Cerita" placeholder="Ceritakan kisah menarik yang Anda alami selama menjalani pendidikan." required></textarea> 
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
        <h4 class="modal-title" id="myModalLabel">Syarat Relawan Pengajar</h4>
      </div>
      <div class="modal-body">
        <p>- Pendidikan minimal sarjana atau diploma profesi</p>
        <p>- Pengalaman kerja minimal 2 tahun</p>
        <p>- Profesi non-guru SD, SMP, SMA</p>
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