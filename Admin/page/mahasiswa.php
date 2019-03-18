<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<?php
	require_once('koneksi.php')
?>
<form>
 <fieldset style="width:55%;">
    <legend> Data Siswa </legend>
		<table border="1" width="2100" >
			 <thead>
				<tr>
					<th>Nama Lengkap</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Tempat Tanggal Lahir</th>
					<th>Asal Sekolah</th>
					<th>Agama</th>
					<th>NISN</th>
					<th>Nama Ayah</th>
					<th>Nama Ibu</th>
					<th colspan="3">Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY npm ASC");
			$data = mysqli_fetch_array($sql);
			
			while($data = mysqli_fetch_array($sql))
			{
			?>
			<tr>

				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['npm'];?></td>
				<td><?php echo $data['jurusan'];?></td>
				<td><?php echo $data['angkatan'];?></td>
				<td><?php echo $data['angkatan'];?></td>
				<td><?php echo $data['npm'];?></td>
				<td><?php echo $data['npm'];?></td>
				<td><?php echo $data['npm'];?></td>
				<td><?php echo $data['npm'];?></td>
				<td><button><a href="?page=mahasiswa_edit&npmmhs=<?php echo $data['npm'];?>"> Edit </button></td>
				<td><button><a onclick='return confirm("Anda Yakin?");' href="?page=mahasiswa_delete&npmmhs=<?php echo $data['npm'];?>"> Hapus </button></td>
					<td><button><a href="?page=formmahasiswa">Tambah</button></td>
			</tr>
			

			<?php
			
			}

			?>
			</tbody>
		</table>
</fieldset>
</form>