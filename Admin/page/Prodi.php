<?php 
	require_once('koneksi.php');
 ?>
<html>
<head>
	<title>Form Table Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="assets/css/button.css">
</head>
<body>
<h1 class=" fa fa fa-table">Tabel Mahasiswa</h1>
<br/>
<Form >
	<table class="table">
	<button> <a href="?page=Prodi_add">Tambah</a> </button>
		<tr>
				<td >No</td>
				<td>Kode Prodi</td>
				<td>Nama Prodi</td>
		</tr>
		<?php 
			$sql = mysqli_query($koneksi, "SELECT * FROM prodi ORDER BY kode_prodi ASC");
			$data = mysqli_fetch_array($sql);
			$no = 1;

			while ($data = mysqli_fetch_array($sql)) 
			{
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $data['kode_prodi'];?></td>
				<td><?php echo $data['nama_prodi'];?></td>

			</tr>
				<?php 
				$no++;
				

			}

		?>

	</table>
</Form>
</body>
</html>