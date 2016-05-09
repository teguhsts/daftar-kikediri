<table>
      
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>L/P</th>
		<th>TTL</th>
		<th>No.HP</th>
		<th>Email</th>
		<th>Profesi</th>
		<th>Tempat Bekerja</th>
		<th>Lama Bekerja</th>
		<th>Status</th>
		<th>Kesediaan Cuti</th>
		<th>Kesediaan Briefing</th>
		<th>Pernah Ikut KI</th>
		<th>Kota yg Pernah Diikuti</th>
		<th>Motivasi Ikut Lagi</th>
		<th>Domisili</th>
		<th>Pendidikan Terakhir</th>
		<th>Univ/Sekolah</th>
		<th>Lulus Tahun</th>
		<th>Facebook</th>
		<th>Twitter</th>
		<th>Bidang Pekerjaan</th>
		<th>Deskripsi Pekerjaan</th>
		<th>Peralatan</th>
		<th>Portofolio</th>
		
	</tr>
	<?php
   include "konek.php";
   $db = mysql_select_db("daftarki_fasil",$koneksi);
   $sql = "select * from dokumenter ORDER BY status DESC";
   $hasil = mysql_query($sql,$koneksi);
   $i=0;
   while ($tampil = mysql_fetch_array($hasil)){
   $i++;
   if($tampil['status']=="1"){$status="Diterima";}else{$status="Tidak Diterima";}
   $pecahpendidikan=explode("-",$tampil['pendidikan']);
   echo "
	<tr>
		<td>".$i."</td>
<td>".$tampil['nama']."</td>
<td>".$tampil['jeniskelamin']."</td>
<td>".$tampil['ttl']."</td>
<td>".$tampil['hp']."</td>
<td>".$tampil['email']."</td>
<td>".$tampil['profesikerja']."</td>
<td>".$tampil['tempatkerja']."</td>
<td>".$tampil['lamakerja']."</td>
<td>".$status."</td>
<td>".$tampil['kesediaan']."</td>
<td>".$tampil['briefing']."</td>
<td>".$tampil['ikut']."</td>
<td>".$tampil['pernahikut']."</td>
<td>".$tampil['mengapaikutlagi']."</td>
<td>".$tampil['domisili']."</td>
<td>".$pecahpendidikan['0']."</td>
<td>".$pecahpendidikan['1']."</td>
<td>".$pecahpendidikan['2']."</td>
<td>".$tampil['fb']."</td>
<td>".$tampil['twitter']."</td>
<td>".$tampil['bidangkerja']."</td>
<td>".$tampil['deskripsikerja']."</td>
<td>".$tampil['peralatan']."</td>
<td>".$tampil['portofolio']."</td>
	</tr>";
	}?>
	
	</table>