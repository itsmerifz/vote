<?php 
session_start();
include_once "session.php";
$menu=(isset($_GET['u']))?$_GET['u']:"default";
$modul="Admin E-Voting MAN Model 1 Manado";
switch ($menu) {
    case 'default':
        default: $aktif="Menu Utama"; $judul="Menu Utama $modul"; include "default.php";
    break;
    
    case 'admin' :
        $aktif="Admin"; $judul="Modul $modul"; include "modul/admin/menuindex.php";
    break;

    case 'kelas' :
        $aktif="Kelas"; $judul="Modul Kelas $modul"; include "modul/kelas/index.php";
    break;

    case 'pemilih' :
        $aktif="Pemilih"; $judul="Modul Pemilih $modul"; include "modul/pemilih/index.php";
    break;

    case 'calonosis' :
        $aktif="Calon Osis"; $judul="Modul Calon Osis $modul"; include "modul/calon-osis/index.php";
    break;

    case 'calonmpk' :
        $aktif="Calon MPK"; $judul="Modul Calon MPK $modul"; include "modul/calon-mpk/index.php";
    break;
}
