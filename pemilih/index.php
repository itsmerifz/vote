<?php
session_start();
include_once "session.php";
$modul=(isset($_GET['u']))?$_GET['u']:"default";
$asset="E-Voting OSIS-MPK | MAN Model 1 Manado";
switch($modul){
	case 'default': default: $aktif="Beranda"; $judul="Beranda $asset"; include "default.php"; break;
	case 'pemilih': $aktif="Siswa"; $judul="Modul Siswa $asset"; include "modul/pemilih/index.php"; break;
	case 'osis': $aktif="Kandidat OSIS"; $judul="Modul Kandidat OSIS $asset"; include "modul/osis/index.php"; break;
	case 'mpk' : $aktif="Kandidat MPK"; $judul="Modul Kandidat MPK $asset"; include "modul/mpk/index.php"; break;
}

?>

