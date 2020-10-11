<?php
include_once "session.php";

$modul=(isset($_GET['s']))?$_GET['s']:"default";
switch($modul){
	case 'default': default: include "modul/kelas/tampil.php"; break;
	case 'tambah': include "modul/kelas/tambah.php"; break;
	case 'simpan': include "modul/kelas/simpan.php"; break;
	case 'edit': include "modul/kelas/edit.php"; break;
	case 'update': include "modul/kelas/update.php"; break;
	case 'hapus': include "modul/kelas/hapus.php"; break;
	case 'detail': include "modul/kelas/detail.php"; break;
	case 'profil': include "modul/kelas/profil.php"; break;
}
?>
