<?php

$server = "localhost";
$user	= "root";
$password = "";
$nama_db = "pendaftaran";

$koneksi=mysqli_connect($server, $user, $password, $nama_db);

/* if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : ". mysqli_connect_error();
}else{
	echo "Database berhasil tersambung.";
} */

?>

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "pendaftaran");

/* Non-prepared statement */
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label TEXT)");

/* Prepared statement, stage 1: prepare */
$stmt = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");

/* Prepared statement, stage 2: bind and execute */
$id = 1;
$label = 'PHP';
$stmt->bind_param("is", $id, $label); // "is" means that $id is bound as an integer and $label as a string

$stmt->execute();
?>