<?php
include 'navbar_set.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Pertemuan Ke-15</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>
<?php
	include 'navbar.php';
	?>
    <!-- start content -->
	
	<div class="container" style="padding-top: 30px">
	<h1><center>Edit Calon Siswa Baru</center></h1>
		<form action="../controller/update.php" method="post">
			<?php
				include '../controller/koneksi.php';
				$id_pendaftaran=$_GET['id_pendaftaran'];
				$query="SELECT * FROM calon_siswa WHERE id_pendaftaran='$id_pendaftaran'";
				$result=mysqli_query($koneksi, $query);
				
				$row=mysqli_fetch_array($result);
			?>
			<input type="hidden" name="id_pendaftaran" value="<?=$row['id_pendaftaran'];?>">
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" value="<?=$row['nama']?>"></input>
			</div>	
			<div class="form-group">
				<label>Asal Sekolah</label>
				<input type="text" name="asal_sekolah" class="form-control" value="<?=$row['asal_sekolah']?>"></input>
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea type="text" name="alamat" class="form-control" ><?=$row['alamat']?></textarea>
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select class="form-control" name="jk">
				<?php if($row['jk']=="L"){?>
					<option value="L" selected="enabled">Laki-Laki</option>
					<option value="P">Perempuan</option>
				<?php }else{ ?>
					<option value="L">Laki-Laki</option>
					<option value="P" selected="enabled">Perempuan</option>
				<?php }?>
				</select>
			</div>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="date" name="tgl_lahir" class="form-control" value="<?=$row['tgl_lahir']?>"></input>
			</div>	
			<div class="form-group">
				<label>No Telpon</label>
				<input type="text" name="no_telfon" class="form-control" value="<?=$row['no_telfon']?>"></input>
			</div>	
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?=$row['email']?>"></input>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		<br><br>
	</div>
	<!-- finish content -->
</body>
</html>