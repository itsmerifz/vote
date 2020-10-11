<?php
include_once "session.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/osis/tampil.php"; break;
	case 'detail': include "modul/osis/detail.php"; break;
}
?>
