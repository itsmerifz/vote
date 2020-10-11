<?php
include_once "session.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/pemilih/profil.php"; break;
	case 'edit': include "modul/pemilih/edit.php"; break;
	case 'update': include "modul/pemilih/update.php"; break;
	case 'profil': include "modul/pemilih/profil.php"; break;
	case 'pilihan': include "modul/pemilih/pilihan.php"; break;
	case 'pilihanmpk': include "modul/pemilih/pilihanmpk.php"; break;
}
