<table class="table table-striped" style="width:900px;margin-left:-140px;">
      <thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>TTL</th>
		<th>No.HP</th>
		<th>Email</th>
		<th>Profesi</th>
		<th>Divisi</th>
		<th>Edit/Hapus</th>
	</tr>
	</thead>
	<tbody>
	

   <?php
   include "konek.php";
   $db = mysql_select_db("daftarki_fasil",$koneksi);
   $sql = "select * from fasil ORDER BY nama";
   
   $hasil = mysql_query($sql,$koneksi);
   $i=0;
   echo $kolom;
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
		<td>".$tampil['divisi']."</td>
		<td><a href=\"editfasil.php?email=".$tampil['email']."\">Edit</a>/<a href=\"hapus.php?email=".$tampil['email']."\">Hapus</a></td>
	</tr>";
	}?>
	</tbody>
	</table>