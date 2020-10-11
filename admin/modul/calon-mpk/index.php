<?php
include_once "session.php";

$modul = (isset($_GET['s'])) ? $_GET['s'] : "default";
switch ($modul) {
	case 'default':
	default:
		include "modul/calon-mpk/tampil.php";
		break;
	case 'tambah':
		include "modul/calon-mpk/tambah.php";
		break;
	case 'simpan':
		include "modul/calon-mpk/simpan.php";
		break;
	case 'edit':
		include "modul/calon-mpk/edit.php";
		break;
	case 'update':
		include "modul/calon-mpk/update.php";
		break;
	case 'hapus':
		include "modul/calon-mpk/hapus.php";
		break;
	case 'detail':
		include "modul/calon-mpk/detail.php";
		break;
	case 'profil':
		include "modul/calon-mpk/profil.php";
		break;
}
