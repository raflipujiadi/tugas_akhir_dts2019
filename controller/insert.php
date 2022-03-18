<?php
	include 'koneksi.php';

	$nama 			= $_POST['nama'];
	$tgl_lahir	 	= $_POST['tgl_lahir'];
	$jk 			= $_POST['jk'];
	$no_telfon 		= $_POST['no_telfon'];
	$email 			= $_POST['email'];
	$asal_sekolah 	= $_POST['asal_sekolah'];
	$alamat 		= $_POST['alamat'];
	
	$query="INSERT INTO calon_siswa SET nama='$nama',
			tgl_lahir='$tgl_lahir',
			jk='$jk',
			no_telfon='$no_telfon',
			email='$email',
			asal_sekolah='$asal_sekolah',
			alamat='$alamat'
	";
	/* echo $query; */
	mysqli_query($koneksi, $query);
	
	header('location:../view/daftarsiswa.php');
?>