 <?php
	$koneksi = mysqli_connect('localhost','root', '', 'perwalian');
	if(!$koneksi){
		echo 'error: '.mysqli_connect_error();
		exit();
	}
?>