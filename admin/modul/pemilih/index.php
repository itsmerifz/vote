<?php
include_once "session.php";

$modul = (isset($_GET['s'])) ? $_GET['s'] : "default";
switch ($modul) {
	case 'default':
	default:
		include "modul/pemilih/tampil.php";
		break;
	case 'tambah':
		include "modul/pemilih/tambah.php";
		break;
	case 'simpan':
		include "modul/pemilih/simpan.php";
		break;
	case 'edit':
		include "modul/pemilih/edit.php";
		break;
	case 'update':
		include "modul/pemilih/update.php";
		break;
	case 'hapus':
		include "modul/pemilih/hapus.php";
		break;
	case 'detail':
		include "modul/pemilih/detail.php";
		break;
	case 'profil':
		include "modul/pemilih/profil.php";
		break;
}
