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

    <title>Eror 404 | Kelas Inspirasi Kediri #4</title>

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
        <a href="https://daftar.kelasinspirasikediri.org"><img src="https://daftar.kelasinspirasikediri.org/images/Logo-New-Kelas-Inspirasi-kediri-21.png" href="#"></img></a>
      </div>

      <div style="margin-bottom:20px;" class="row text-center">
        <h3>Upps! :)</h3>

<?php
$em=$_GET['em'];
if ($em=="1"){
$pesan = "Format penulisan tanggal lahir Anda salah.</p>";
}
else if($em=="2"){
$pesan = "Gagal memasukkan data. Kemungkinan alamat email sudah digunakan.<p><p>Gunakan email yang lain atau minta admin untuk menghapus entry sebelumnya. </p><p>Sampaikan pesan ini : &#34;<b>".$_GET['pesan']."</b>&#34; ke CP.</p>";
}else if ($em=="3"){
$pesan = "Data yang Anda kirim kosong. Cobalah daftar dengan browser yang lain.</p>";
}
else{
$pesan = "Kesalahan tidak diketahui";
}
echo "<p>Terjadi kesalahan. ".$pesan."<p>CP 085608251650 (Mita) atau 085642699799 (Mizan).</p>";
?>
</div>
<footer style="margin-top:50px;" class="footer">
        <p>&copy; 2016 Kelas Inspirasi Kediri.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>