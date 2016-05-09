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

    <title>Kelas Inspirasi Kediri</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <link rel="stylesheet" type="text/css" href="../../dist/dp/jquery-ui-1.9.1.custom.min.css" />
                              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                              <script type="text/javascript" src="../../dist/dp/jquery-ui-1.9.1.custom.min.js" charset="utf-8"></script>
                              <script type="text/javascript" src="../../dist/dp/query-ui-i18n.min.js" charset="utf-8"></script>
    
    
    <script src="../../dist/js/bootstrap.js"></script>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="https://daftar.kelasinspirasikediri.org/pengajar/faq.html">FAQ</a></li>
            <li role="presentation"><a target="_BLANK" href="https://daftar.kelasinspirasikediri.org/sekapur-sirih.pdf">Download Sekapur Sirih</a></li>
            <li role="presentation" class="active"><a href="http://fb.com/KIKediri">Bantuan?</a></li>
          </ul>
        </nav>
        <a href="https://daftar.kelasinspirasikediri.org"><img src="https://daftar.kelasinspirasikediri.org/images/Logo-New-Kelas-Inspirasi-kediri-21.png"></img></a>
      </div>
      <div style="margin-bottom:20px;" class="row text-center">
        <img src="../../images/closed.png" class="img-responsive center-block" width="300px" height="300px" alt="Pendaftaran Relawan KI Kediri Telah Ditutup">
      
      <?php
        $pesan=$_GET['pesan'];

        if ($pesan=="1"){
        echo "<h3><b>Mohon Maaf Kakak, Pendaftaran Belum Dibuka :)</b></h3>";
        }else if($pesan=="2"){
        echo "<h3><b>Mohon Maaf Kakak, Pendaftaran Sudah Ditutup :)</b></h3>";
        }else{}

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
