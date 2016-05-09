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

      <div class="row text-center" style="margin-bottom:10px;">
        <h3>List Pendaftar</h3>
      </div>
      <?php
   include "konek.php";
   $relawan=$_GET['relawan'];
   
   //cek data yang diminta
   if ($relawan=="fasil"){
   $download="fasil";
   $fas="selected";
   $peng=" ";
   $dok=" ";
   }else if($relawan=="pengajar"){
   $download="pengajar";
   $fas=" ";
   $peng="selected";
   $dok=" ";
   }else if($relawan=="dokumentasi"){
   $download="dokumentasi";
   $fas=" ";
   $peng=" ";
   $dok="selected";
   }else{
   $download="pengajar";
   $fas=" ";
   $peng="selected";
   $dok=" ";
   }
   ?>
      <form method="get" action="tampil.php" class="form-inline">
      	<div class="row">
  	  <div class="form-group col-md-6 col-md-offset-3">
           <select class="form-control" name="relawan">
  		<option value="fasil" <?php echo $fas;?>>Fasilitator</option>
  		<option value="pengajar" <?php echo $peng;?>>Pengajar</option> 
  		<option value="dokumentasi" <?php echo $dok;?>>Dokumentasi</option>
	   </select>
	   <button type="submit" style="padding:8px 26px;" class="btn btn-warning">Lihat</button>
	   <a class="btn btn-success" role="button" href="download.php?relawan=<?php echo $download;?>">Download</a>
          </div>
  	 </div>
      </form>
      <br>
      <?php if ($relawan=="fasil"){
   include "fasil.php";
   }else if($relawan=="pengajar"){
   include "pengajar.php";
   }else if($relawan=="dokumentasi"){
   include "dokumentasi.php";
   }else{
   include "pengajar.php";
   }
   ?>
      
      <footer style="margin-top:250px;" class="footer">
        <p>&copy; 2016 Kelas Inspirasi Kediri.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    
    
  </body>
</html>
      
      