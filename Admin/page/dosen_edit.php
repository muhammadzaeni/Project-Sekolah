<?php

	require_once("koneksi.php");
	
	 $nidndosen= $_GET['nidndosen'];

	 $sql = mysqli_query($koneksi, "SELECT nidn, nama, tempat_lhr, tgl_lhr, kota, kode_pos, jk, status, jengped, basehomedos, aktif, keahlian, jafung, pass FROM dosen WHERE nidn= '$nidndosen' ");
	 $data= mysqli_fetch_array($sql);
?>
<h1 class="title">Form Edit Dosen</h1>
<form method="post" action="?page=dosen_edit_proses">
	
<table>

	<tr>
		<td width="200">NIDN</td>
		<td>:</td>
		<td><input type="text" name="nidn" value= "<?php echo $data['nidn'];?>"></td>
	</tr>

	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value= "<?php echo $data['nama'];?>"></td>
	</tr>

	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tempat_lhr" value= "<?php echo $data['tempat_lhr'];?>"></td>
	</tr>

	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="text" name="tgl_lhr" value= "<?php echo $data['tgl_lhr'];?>"></td>
	</tr>

	<tr>
		<td>Kota</td>
		<td>:</td>
		<td><input type="text" name="kota" value= "<?php echo $data['kota'];?>"></td>
	</tr>
	
	<tr>
		<td>Kode Pos</td>
		<td>:</td>
		<td><input type="text" name="kode_pos" value= "<?php echo $data['kode_pos'];?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="text" name="jk" value= "<?php echo $data['jk'];?>"></td>
	</tr>
	
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><input type="text" name="status" value= "<?php echo $data['status'];?>"></td>
	</tr>
	<tr>
		<td>Jenjang Pendidikan</td>
		<td>:</td>
		<td><input type="text" name="jengped" value= "<?php echo $data['jengped'];?>"></td>
	</tr>
	<tr>
		<td>Basehomdos</td>
		<td>:</td>
		<td><input type="text" name="basehomedos" value= "<?php echo $data['basehomedos'];?>"></td>
	</tr>
	<tr>
		<td>Aktif</td>
		<td>:</td>
		<td><input type="text" name="aktif" value= "<?php echo $data['aktif'];?>"></td>
	</tr>
	<tr>
		<td>Keahlian</td>
		<td>:</td>
		<td><input type="text" name="keahlian" value= "<?php echo $data['keahlian'];?>"></td>
	</tr>
	<tr>
		<td>Jafung</td>
		<td>:</td>
		<td><input type="text" name="jafung" value= "<?php echo $data['jafung'];?>"></td>
	</tr>

<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="pass" value= "<?php echo $data['pass'];?>"></td>
	</tr>

</table>
<button type="submit" value="submit">Simpan</button>

</form>