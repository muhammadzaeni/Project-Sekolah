<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php
	require_once('koneksi.php')
?>
<h1 class="menu-icon fa fa-user">Dosen </h1>
<br/>
<button><a href="?page=dosen_add">Tambah</button></a>
<form>
<table border="1">
	<tr>
		<td> ID Dosen </td>
		<td> NIDN </td>
		<td> Nama </td>
		<td> Tempat Lahir </td>
		<td>Tanggal Lahir</td>
		<td> Kota </td>
		<td> Alamat </td>
		<td> Kode Pos </td>
		<td> Jenis Kelamin </td>
		<td> Status </td>
		<td> Jenjang Pendidikan </td>
		<td> BaseHomeDos </td>
		<td> Aktif </td>
		<td> Keahlian </td>
		<td> Jabatan Fungsional </td>
	</tr>
	<?php
	$sql = mysqli_query($koneksi, "SELECT * FROM dosen  ORDER BY IDdosen ASC ");
	$data = mysqli_fetch_array($sql);
	
	while($data = mysqli_fetch_array($sql))
	{
	?>
	<tr>
		<td><?php echo $data['IDdosen'];?></td>
		<td><?php echo $data['NIDN'];?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['tempat_lhr'];?></td>
		<td><?php echo $data['tgl_lhr'];?></td>
		<td><?php echo $data['kota'];?></td>
		<td><?php echo $data['alamat'];?></td>
		<td><?php echo $data['kode_pos'];?></td>
		<td><?php echo $data['jk'];?></td>
		<td><?php echo $data['status'];?></td>
		<td><?php echo $data['jengped'];?></td>
		<td><?php echo $data['basehomedos'];?></td>
		<td><?php echo $data['aktif'];?></td>
		<td><?php echo $data['keahlian'];?></td>
		<td><?php echo $data['jafung'];?></td>
	

	</tr>
	

	<?php
	
	}

	?>
	
	
	</table>
</form>