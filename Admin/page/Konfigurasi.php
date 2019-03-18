<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<?php
	require_once('koneksi.php')
?>
<h1 class="menu-icon fa fa-cog">Konfigurasi Sistem</h1>
<br/>
	<button><a href="?page=konfigurasi_add">Tambah</button></a>
<form>
<table border="1" width="800">
<tr>
	<td>Id</td>
	<td>Nama Perguruan Tinggi<td>
	<td>Nama Fakultas</td>
	<td>ALamat</td>
	<td>No Telpn</td>
	<td>Semester</td>
	<td>Tahun Ajaran</td>
	<td colspan="2">Aksi</td>

</tr>
<?php
	$sql = mysqli_query($koneksi, "SELECT * FROM konfigurasi  ORDER BY nama_pt ASC ");
	$data = mysqli_fetch_array($sql);
	
	while($data = mysqli_fetch_array($sql))
	{
	?>
	<tr>
		<td><?php echo $data['id'];?></td>
		<td><?php echo $data['nama_pt'];?></td>
		<td><?php echo $data['nama_fakultas'];?></td>
		<td><?php echo $data['alamat'];?></td>
		<td><?php echo $data['no_telp'];?></td>
		<td><?php echo $data['semester'];?></td>
		<td><?php echo $data['tahun_ajaran'];?></td>
		<td><a href="?page=konfigurasi_edit&namafakul=<?php echo $data['nama_fakultas'];?>">Edit</a>
		<td><a onclick='return confirm("Anda Yakin?");' href="?page=konfigurasi_delete&namafakul=<?php echo $data['nama_fakultas'];?>">Delete</a>
		
	</tr>
	

	<?php
	
	}

	?>
</table>
</form>