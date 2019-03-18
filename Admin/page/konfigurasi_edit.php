<?php

	require_once("koneksi.php");
	
	 $namafakul= $_GET['namafakul'];

	 $sql = mysqli_query($koneksi, "SELECT nama_pt, nama_fakultas, alamat, no_tlp, semester, tahun_ajaran FROM konfigurasi WHERE nama_fakultas= '$namafakul' ");
	 $data= mysqli_fetch_array($sql);
?>
<h1 class="title">Edit konfigurasi</h1>
<form method="post" action="?page=konfigurasi_edit_proses">
	
<table>
	<tr>
		<td>Nama Perguruan Tinggi</td><td>:</td><td><input type="text" name="nama_pt" value= "<?php echo $data['nama_pt'];?>"></td>
	</tr>
	<tr>
		<td>Nama Fakultas</td><td>:</td><td><input type="text" name="nama_fakultas" value= "<?php echo $data['nama_fakultas'];?>"></td>
	</tr>
	<tr>
		<td>Alamat</td><td>:</td><td><input type="text" name="alamat" value= "<?php echo $data['alamat'];?>"></td>
	</tr>
	<tr>
		<td>No Telepon</td><td>:</td><td><input type="text" name="no_tlp" value= "<?php echo $data['no_tlp'];?>"></td>
	</tr>
	<tr>
		<td>Semester</td><td>:</td><td><input type="text" name="semester" value= "<?php echo $data['semester'];?>"></td>
	</tr>	
	<tr>
		<td>Tahun Ajar</td><td>:</td><td><input type="text" name="thn_ajar" value= "<?php echo $data['tahun_ajaran'];?>"></td>
	</tr>

</table>
<button type="submit" value="submit">Simpan</button>

</form>