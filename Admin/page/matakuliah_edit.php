<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php

	require_once("koneksi.php");
	
	 $kdmatkul= $_GET['kdmatkul'];

	 $sql = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE kode_matakuliah= '$kdmatkul' ");
	 $data= mysqli_fetch_array($sql);
?>
<h1 class="title">Edit mata kuliah</h1>
<form method="post" action="?page=matakuliah_edit_proses">
	
<table>
	<tr>
		<td>Kode Matakuliah</td>
		<td></td>
		<td>
			<input type="hidden" name="key" value="<?php echo $data['kode_matakuliah'];?>">
			<input type="text" name="kode_matakuliah" value= "<?php echo $data['kode_matakuliah'];?>">
		</td>
	</tr>

	<tr>
		<td>Nama Matakuliah</td>
		<td></td>
		<td><input type="text" name="nama_matakuliah" value= "<?php echo $data['nama_matakuliah'];?>"></td>
	</tr>	

	<tr>
		<td>Kode Prodi</td>
		<td></td>
		<td><input type="text" name="kdprodi" value= "<?php echo $data['kdprodi'];?>"></td>
	</tr>	

	<tr>
		<td>SKS</td>
		<td></td>
		<td><input type="text" name="sks" value= "<?php echo $data['sks'];?>"></td>
	</tr>

	<tr>
		<td>Semester</td>
		<td></td>
		<td><input type="text" name="semester" value= "<?php echo $data['semester'];?>"></td>
	</tr>

	<tr>
		<td>Status</td>
		<td></td>
		<td><input type="text" name="aktif" value= "<?php echo $data['aktif'];?>"></td>
	</tr>

</table>
<button type="Reset" value="reset">Reset</button>
<button type="submit" value="submit">Simpan</button>
<button><a href="?page=Matakuliah"> Kembali</button></a>

</form>