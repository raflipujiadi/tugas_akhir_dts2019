<?php
$pages = array(
    '../index.php' => 'Home',
    'profil.php' => 'Profil',
    'pendaftaran.php' => 'Pendaftaran',
    'daftarsiswa.php' => 'Daftar Siswa',
    'tentang.php' => 'Tentang Sekolah',
    'masuk.php' => 'Masuk'
) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;

?>