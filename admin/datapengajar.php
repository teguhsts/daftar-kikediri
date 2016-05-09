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
		<th>Tempat Bekerja Sebelumnya</th>
		<th>Jabatan/Posisi Sebelumnya</th>
		<th>Lama Bekerja Sebelumnya</th>
		<th>Lama Bekerja Total</th>
		<th>Nama Organisasi</th>
		<th>Jabatan dalam Organisasi</th>
		<th>Aktivitas dalam Organisasi</th>
		<th>Nama Organisasi Lain</th>
		<th>Jabatan Organisasi Lain</th>
		<th>Prestasi</th>
		<th>Motivasi</th>
		<th>Peran Profesi</th>
		<th>Pengalaman Unik</th>
	</tr>
	<?php
   include "konek.php";
   $db = mysql_select_db("daftarki_fasil",$koneksi);
   $sql = "select * from pengajar ORDER BY status DESC";
   $hasil = mysql_query($sql,$koneksi);
   $i=0;
   while ($tampil = mysql_fetch_array($hasil)){
   $i++;
   if($tampil['status']=="1"){$status="Diterima";}else{$status="Tidak Diterima";}
   $pecahpendidikan=explode("-",$tampil['pendidikan']);
   $pecahorg=explode("_",$tampil['organisasi']);
   $pecahorglain=explode("_",$tampil['organisasilain']);
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
<td>".$tampil['tempatkerjalalu']."</td>
<td>".$tampil['posisikerjalalu']."</td>
<td>".$tampil['lamakerjalalu']."</td>
<td>".$tampil['totallamakerja']."</td>
<td>".$pecahorg['0']."</td>
<td>".$pecahorg['1']."</td>
<td>".$pecahorg['2']."</td>
<td>".$pecahorglain['0']."</td>
<td>".$pecahorglain['1']."</td>
<td>".$tampil['prestasi']."</td>
<td>".$tampil['motivasi']."</td>
<td>".$tampil['peranprofesi']."</td>
<td>".$tampil['pengalamanunik']."</td>
	</tr>";
	}?>
	
	</table>