<?php
include_once "session.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/mpk/tampil.php"; break;
	case 'detail': include "modul/mpk/detail.php"; break;
}
?>
