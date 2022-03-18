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
	<!-- start menu -->
  <?php
  include 'navbar.php';
  ?>
    <!-- finish menu -->
    <!-- start content -->
	<div class="container" style="padding-top:30 px">
		<form action="../controller/insert.php" method="post">
        <div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda"></input>
			</div>
            <div class="form-group">
				<label>Password</label>
				<input type="password" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda"></input>
			</div>	
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		<br><br>
	</div>
	<!-- finish content -->
</body>
</html>