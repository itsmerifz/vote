<?php
include_once "session.php";

$modul = (isset($_GET['s'])) ? $_GET['s'] : "default";
switch ($modul) {
	case 'default':
	default:
		include "modul/calon-osis/tampil.php";
		break;
	case 'tambah':
		include "modul/calon-osis/tambah.php";
		break;
	case 'simpan':
		include "modul/calon-osis/simpan.php";
		break;
	case 'edit':
		include "modul/calon-osis/edit.php";
		break;
	case 'update':
		include "modul/calon-osis/update.php";
		break;
	case 'hapus':
		include "modul/calon-osis/hapus.php";
		break;
	case 'detail':
		include "modul/calon-osis/detail.php";
		break;
	case 'profil':
		include "modul/calon-osis/profil.php";
		break;
}
