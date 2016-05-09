<table class="table" style="width:1000px;margin-left:-130px;">
      <thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>TTL</th>
		<th>No.HP</th>
		<th>Email</th>
		<th>Profesi</th>
		<th>Lama Kerja</th>
		<th>Status</th>
	</tr>
	</thead>
	<tbody>
	

   <?php
   include "konek.php";
   $db = mysql_select_db("daftarki_fasil",$koneksi);
   $sql = "select * from pengajar ORDER BY waktu DESC";
   
   $hasil = mysql_query($sql,$koneksi);
   $i=0;
   echo $kolom;
   while ($tampil = mysql_fetch_array($hasil)){
   $i++;
   if ($tampil['status']=="1"){
   $status="Diterima";
   $new="";
   $row="class=\"success\"";
   }else if ($tampil['status']=="0"){
   $status="Tidak Diterima";
   $new="";
   $row=" class=\"danger\"";
   }else{
   $status="Belum Ditetapkan";
   $new=" <img src=\"images/new.gif\">";
   $row="";
   }
   echo "
	<tr ".$row.">
		<td>".$i."</td>
		<td><a href=\"editpengajar.php?email=".$tampil['email']."\">".$tampil['nama']."</a>".$new."</td>
		<td>".$tampil['ttl']."</td>
		<td>".$tampil['hp']."</td>
		<td>".$tampil['email']."</td>
		<td>".$tampil['profesikerja']."</td>
		<td>".$tampil['lamakerja']."</td>
		<td>".$status."</td>
	</tr>";
	}?>
	</tbody>
	</table>
	