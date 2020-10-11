<?php
if (isset($_GET['idp'])) {
	include "../aksesDB.php";
	$id = $_GET['idp'];
	$sql   = "SELECT * FROM kandidat2 WHERE idkandidat2='$id'";
	$hapus = mysqli_query($sambungDB, $sql);
	$r     = mysqli_fetch_array($hapus);
	if ($r['foto'] != '') {
		$foto = $r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../images/calonmpk/$foto");
		$sql   = "DELETE FROM kandidat2 WHERE idkandidat2='$id'";
	} else {
		$sql   = "DELETE FROM kandidat2 WHERE idkandidat2='$id'";
	}

	$hapus = mysqli_query($sambungDB, $sql);
	if ($hapus) {
		//			echo 'Data Kelas Berhasil di Hapus ';
		//			echo '<a href="index.php">Kembali</a>';
		header("Location: ?u=calonmpk");
	} else {
		echo 'Data Kelas GAGAL di Hapus';
		echo '<a href="menuindex.php">Kembali</a>';
	}
}
