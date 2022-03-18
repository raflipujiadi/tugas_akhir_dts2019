<?php
	include 'koneksi.php';

	$id_pendaftaran	= $_POST['id_pendaftaran'];
	$nama 			= $_POST['nama'];
	$tgl_lahir	 	= $_POST['tgl_lahir'];
	$jk 			= $_POST['jk'];
	$no_telfon 		= $_POST['no_telfon'];
	$email 			= $_POST['email'];
	$asal_sekolah 	= $_POST['asal_sekolah'];
	$alamat 		= $_POST['alamat'];
	
	$query="UPDATE calon_siswa SET nama='$nama',
			tgl_lahir='$tgl_lahir',
			jk='$jk',
			no_telfon='$no_telfon',
			email='$email',
			asal_sekolah='$asal_sekolah',
			alamat='$alamat' WHERE id_pendaftaran='$id_pendaftaran'";
			
	/* echo $query; */
	mysqli_query($koneksi, $query);
	
	header('location:../view/daftarsiswa.php');
?>