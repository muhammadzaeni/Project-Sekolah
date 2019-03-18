<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php
require_once('koneksi.php');
 $npmmhs = $_GET['npmmhs'];

 $sql = mysqli_query($koneksi, "SELECT nama, npm, jurusan, angkatan FROM mahasiswa where npm='$npmmhs'");

 $data= mysqli_fetch_array($sql);
?>


<form  method="post" action="?page=mahasiswaedit_proses">
<table width="500">
<tr>
	<h3> Form Edit Siswa </h3>
</tr>
<tr>
	<td>Nama Lengkap</td>
	<td><input type='text' name='nama' value="<?php echo $data['nama'];?>"></td>
</tr>
<tr>
	<td>Alamat</td>
	<td> 
	<input type='hidden' name='key' value="<?php echo $data['npm'];?>">
	<input type='text' name='npm' value="<?php echo $data['npm'];?>">
	</td>
</tr>
<tr>
	<td>Jenis Kelamin</td><td>
	<select name='jurusan' value="<?php echo $data['jurusan'];?>">>
	<option value='Laki - Laki'>Laki - Laki </option>
	<option value='Perempuan'> Perempuan </option>
	
	</select>
	</td>
</tr>
<tr>
	<td>Tempat Lahir</td>
	<td><input type="text" name="tempatlahir" value=""></td>
</tr>
<tr>
	<td>Tanggal Lahir</td>
	<td><input type="date" name="tanggallahir" value="<?php echo $data['tanggallahir'];?>">
	</td>
</tr>
<tr>
	<td>Asal Sekolah</td>
	<td><input type="text" name="asalsekolah"></td>
</tr>
<tr>
	<td>Agama</td>
	<td><select name="agama"value="<?php echo $data['agama'];?>">
		<option>Islam</option>
		<option>Kristen</option>
		<option>Budha</option>
	</select>
	</td>
</tr>
<tr>
	<td>NISN</td>
	<td><input type="text" name="nisn"></td>
</tr>
<tr>
	<td>Nama Ayah</td>
	<td><input type="text" name="namaayah"></td>
</tr>
<tr>
	<td>Nama Ibu</td>
	<td><input type="text" name="namaibu"></td>
</tr>
	
<tr>
		<td><button type="submit" name="simpan" value="simpan">Simpan</button></td>
</tr>
<tr>
		<td><button><a href="?page=mahasiswa">Kembali</a></button></td>
</tr>

</table>
</form>