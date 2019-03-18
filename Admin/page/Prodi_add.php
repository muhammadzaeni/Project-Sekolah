<!DOCTYPE html>
<html>
<head>
	<title> Prodi Teknik Universitas Suryakancana</title>
	<link rel="stylesheet" type="text/css" href="assets/css/button.css">
</head>
<body>
	<center><h2> Daftar Program Study </h2></center>
	<Form method="Post" action="?page=Prodi_add_proses" >
	<table  width="500" align="center" class="table">
				<div class="table">
					<tr>
							<td> No</td>
							<td> </td>
								<td> <input type="text" name="no" placeholder="No" > </td>

					</tr>

					<tr>
							<td> Kode Prodi</td>
							<td> </td>
								<td> <input type="text" name="kode_prodi" placeholder="Kode Prodi" > </td>

					</tr>

					<tr>
						<td>Nama Prodi</td>
						<td></td>
						<td>
						<select name='nama_prodi'>
							<option value='informatika'>INFORMATIKA</option>
							<option value='industri'>INDUSTRI </option>
							<option value='sipil'>SIPIL</option>
							
							</select>
							</td>

					</tr>
					
	</table>
	<button type="submit" value="submit" class="simpan"><a href="?page=Prodi_add_proses"></a> Simpan</button>
	<button type="reset" value="reset" class="reset"><a href="#"></a>Reset </button>
	<button ><a href="?page=FormMahasiswa">Kembali</a> </button>
	</Form>
</body>
</html>