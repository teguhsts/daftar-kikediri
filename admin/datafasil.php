<table>
      
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>TTL</th>
		<th>No.HP</th>
		<th>Email</th>
		<th>Profesi</th>
		<th>Domisili</th>
		<th>Motivasi</th>
		<th>Divisi</th>
	</tr>
	<?php
   include "konek.php";
   $db = mysql_select_db("daftarki_fasil",$koneksi);
   $sql = "select * from fasil ORDER BY nama";
   $hasil = mysql_query($sql,$koneksi);
   $i=0;
   while ($tampil = mysql_fetch_array($hasil)){
   $i++;
   echo "
	<tr>
		<td>".$i."</td>
		<td>".$tampil['nama']."</td>
		<td>".$tampil['ttl']."</td>
		<td>".$tampil['hp']."</td>
		<td>".$tampil['email']."</td>
		<td>".$tampil['profesi']."</td>
		<td>".$tampil['domisili']."</td>
		<td>".$tampil['motivasi']."</td>
		<td>".$tampil['divisi']."</td>
	</tr>";
	}?>
	
	</table>