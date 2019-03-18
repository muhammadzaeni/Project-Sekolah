<?php

	require_once("koneksi.php");
	
	 $npmnilai= $_GET['npmnilai'];

	 $sql = mysqli_query($koneksi, "SELECT npm, kode_matakuliah, nama_matakuliah, sks, angka_mutu, nilai, semester FROM nilai WHERE npm= '$npmnilai' ");
	 $data= mysqli_fetch_array($sql);
?>
<h1 class="title">Edit nilai</h1>
<form method="post" action="?page=nilai_edit_proses">
	
<table>
	<tr>
		<td width="200">NPM</td>
		<td>:</td>
		<td><input type="text" name="npm" value= "<?php echo $data['npm'];?>"></td>
	</tr>

	<tr>
		<td>Kode Matakuliah</td>
		<td>:</td>
		<td><input type="text" name="kode_matakuliah" value= "<?php echo $data['kode_matakuliah'];?>"></td>
	</tr>

	<tr>
		<td>Nama Matakuliah</td>
		<td>:</td>
		<td><input type="text" name="nama_matakuliah" value= "<?php echo $data['nama_matakuliah'];?>"></td>
	</tr>

	<tr>
		<td>SKS</td>
		<td>:</td>
		<td><input type="text" name="sks" value= "<?php echo $data['sks'];?>"></td>
	</tr>

	<tr>
		<td>Angka Mutu</td>
		<td>:</td>
		<td><input type="text" name="angka_mutu" value= "<?php echo $data['angka_mutu'];?>"></td>
	</tr>

	<tr>
		<td>Nilai</td>
		<td>:</td>
		<td><input type="text" name="nilai" value= "<?php echo $data['nilai'];?>"></td>
	</tr>

	<tr>
		<td>Semester</td>
		<td>:</td>
		<td><input type="text" name="semester" value= "<?php echo $data['semester'];?>"></td>
	</tr>

	<tr>
		<td></td>
		<td></td>
		<td><button type="submit" value="submit">Simpan</button></td>
	</tr>

</table>


</form>