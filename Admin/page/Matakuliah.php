<?php 
	require_once('koneksi.php');
 ?>
<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<h1 class="menu-icon fa fa-address-book-o">Matakuliah Mahasiswa </h1>
<br/>
<button><a href="?page=matakuliah_add">Tambah</button></a>
<form>
<table border="1" width="700">
	<tr>
		<td>Kode Matakuliah</td>
		<td>Nama Matakuliah</td>
		<td>Kode Prodi</td>
		<td>SKS</td>
		<td>Semester</td>
		<td>Status</td>
		<td colspan="2">Aksi</td>
	</tr>
	<?php 
			$sql = mysqli_query($koneksi, "SELECT * FROM matakuliah ORDER BY kode_matakuliah ASC");
			$data = mysqli_fetch_array($sql);
			

			while ($data = mysqli_fetch_array($sql)) 
			{
			?>
			<tr>
				
				<td><?php echo $data['kode_matakuliah'];?></td>
				<td><?php echo $data['nama_matakuliah'];?></td>
				<td><?php echo $data['kdprodi'];?></td>
				<td><?php echo $data['sks'];?></td>
				<td><?php echo $data['semester'];?></td>
				<td><?php echo $data['aktif'];?></td>
				<td><button><a href="?page=matakuliah_edit&kdmatkul=<?php echo $data['kode_matakuliah'];?>"> Edit </button></td>
				<td><button><a onclick='return confirm("Anda Yakin?");' href="?page=matakuliah_delete&kdmatkul=<?php echo $data['kode_matakuliah'];?>"> Hapus </button></td>
			</tr>
				<?php 
				

			}

		?>

	</table>
</form>