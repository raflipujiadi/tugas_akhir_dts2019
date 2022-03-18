<?php
	include "koneksi.php";
	
	$id_pendaftaran = $_GET['id_pendaftaran'];
	
	$query = "DELETE FROM calon_siswa WHERE id_pendaftaran = $id_pendaftaran";
	mysqli_query($koneksi,$query);
	
	header('location:../view/daftarsiswa.php');