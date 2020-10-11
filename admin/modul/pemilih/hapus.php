<?php
if (isset($_GET['nis'])) {
	include "../aksesDB.php";
	$id = $_GET['nis'];
	$sql   = "SELECT * FROM pemilih WHERE nis='$id'";
	$hapus = mysqli_query($sambungDB, $sql);
	$r     = mysqli_fetch_array($hapus);
	if ($r['foto'] != '') {
		$foto = $r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../images/user/$foto");
	}
	$sql   = "DELETE FROM pemilih WHERE nis='$id'";
	$hapus = mysqli_query($sambungDB, $sql);
	if ($hapus) {
		header("Location: ?u=pemilih");
	} else {
		include "index.php?u=pemilih&s=default";
		echo '<script language="JavaScript">';
		echo 'alert("Data Gagal dihapus.")';
		echo '</script>';
	}
}
