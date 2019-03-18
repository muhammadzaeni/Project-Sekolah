
<?php 
	require_once('koneksi.php');
 ?>
<link rel="stylesheet" type="text/css" href="assets/css/button.css">
<br/>

<form>
<table  width="700">
	<h1> IDENTITAS MAHASISWA  </h1>
	<?php 
			$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY npm ASC");
			$data = mysqli_fetch_array($sql);
			
		?>
				<tr>
						<td>NPM</td>
						<td><?php echo $data['npm'];?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><?php echo $data['nama'];?></td>
					</tr>
					<tr>
						<td>Wali Dosen</td>
						<td><?php echo $data['nama'];?></td>
					</tr>
		

	


	<?php 
			$sql = mysqli_query($koneksi, "SELECT * FROM bayar ORDER BY npm ASC");
			$data = mysqli_fetch_array($sql);
			

			while ($data = mysqli_fetch_array($sql)) 
			{
	?>
					
					<br>
					<h1>Rincian Pemayaran Semester 20181</h1>
					<br>
					<tr>
						<td>Beban SKS</td>
						<td><?php echo $data['b_sks'];?></td>
						<td>Biaya DPP</td>
						<td><?php echo $data['dpp'];?></td>
						<td>Biaya UTS/UAS</td>
						<td><?php echo $data['b_uts_uas'];?></td>
						<td>Biaya Praktikum</td>
						<td><?php echo $data['b_praktikum'];?></td>
						<td>Biaya KP </td>
						<td><?php echo $data['b_kp'];?></td>
						<td>Biaya TA </td>
						<td><?php echo $data['b_ta'];?></td>
						<td>Biaya Lain-lain</td>
						<td><?php echo $data['b_lain'];?></td>
						<td>Biaya Tunggakan</td>
						<td><?php echo $data['b_tunggakan'];?></td>
						<td>Biaya Total Pembayaran</td>
						<td colspan="2">Aksi</td>
					</tr>
		<?php 
				

			}

		?>
<a href="?page=pembayaran_add"><button>Tambah</button></a>

	</table>
</form>
