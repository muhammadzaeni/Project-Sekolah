<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="styletabel.css">
</head>
<body>
	<center><h2>Form Mahasiswa </h2></center>
	<Form method="Post" action="#" >
	<table  width="500" align="center" class="table">
				<div class="table">
					<tr>
							<td> NPM </td>
							<td> </td>
								<td> <input type="text" placeholder=" NPM "> </td>

					</tr>

					<tr>
						<td>Nama</td>
						<td></td>
						<td><input type="text" placeholder=" Nama " ></td>

					</tr>
					<tr>
						<td> Angkatan </td>
						<td> </td>
						<td>
						<div>
							<select class="angkatan" name="angkatan" values="angkatan">
								<option value="angkat"> Angkatan </option>
								<option value="1"> 2010 </option>
								<option value="2"> 2011 </option>
								<option value="3"> 2012 </option>
								<option value="4"> 2013 </option>
								<option value="5"> 2014 </option>
								<option value="6"> 2015 </option>
								<option value="7"> 2016 </option>
								<option value="8"> 2017 </option>
								<option value="9"> 2018 </option>
							

							</select>

						</div>
						</td>
					</tr>

					<tr>
							<td>Jurusan</td>
							<td></td>
							<td>
						<div>
							<select class="jurusan" name="jurusan" values="jurusan">
								<option value="angkat"> Jurusan </option>
								<option value="1"> Informatika </option>
								<option value="2"> Sipil </option>
								<option value="3"> Industri </option>

							</select>

						</div>
						</td>	


					</tr>

	</div>
	</table>
	<button type="submit" value="submit" class="simpan"><a href="#"></a> Simpan</button>
	<button type="reset" value="reset" class="reset"><a href="#"></a>Reset </button>
	<button ><a href="?page=FormMahasiswa">Kembali</a> </button>
	</Form>
</body>
</html>