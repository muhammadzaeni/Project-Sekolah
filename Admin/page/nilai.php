
<?php 
	require_once('koneksi.php');
 ?>
<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<h1 class="menu-icon fa fa-address-book-o">Nilai Mahasiswa </h1>
<br/>
<button><a href="?page=nilai_add">Tambah</button></a>
<form>
<table border="1" width="700">
	<tr>
		<td>Npm</td>
		<td>Beban SKS</td>
		<td>Biaya DPP</td>
		<td>Biaya UTS/UAS</td>
		<td>Biaya Praktikum</td>
		<td>Biaya KP </td>
		<td>Biaya TA </td>
		<td>Biaya Lain-lain</td>
		<td>Biaya Tunggakan</td>
		<td>Total Pembayaran</td>

		<td colspan="2">Aksi</td>
	</tr>
	<?php 
			$sql = mysqli_query($koneksi, "SELECT * FROM bayar ORDER BY npm ASC");
			$data = mysqli_fetch_array($sql);
			

			while ($data = mysqli_fetch_array($sql)) 
			{
			?>
			<tr>
				
				<td><?php echo $data['nilai'];?></td>
				<td><?php echo $data['npm'];?></td>
				<td><?php echo $data['nama_matakuliah'];?></td>
				<td><?php echo $data['kode_matakuliah'];?></td>
				<td><?php echo $data['sks'];?></td>
				<td><?php echo $data['angka_mutu'];?></td>
				<td><?php echo $data['smester'];?></td>
				<td><?php echo $data['kode_prodi'];?></td>
				<td><?php echo $data['aktif'];?></td>
				<td><button><a href="?page=matakuliah_edit&kdmatkul=<?php echo $data['kode_matakuliah'];?>"> Edit </button></td>
				<td><button><a onclick='return confirm("Anda Yakin?");' href="?page=matakuliah_delete&kdmatkul=<?php echo $data['kode_matakuliah'];?>"> Hapus </button></td>
			</tr>
				<?php 
				

			}

		?>

	</table>
</form>
