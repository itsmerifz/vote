<?php
if (isset($_GET['idp'])) {
	include "../aksesDB.php";
	$id = $_GET['idp'];
	$sql   = "SELECT * FROM kandidat WHERE idkandidat='$id'";
	$hapus = mysqli_query($sambungDB, $sql);
	$r     = mysqli_fetch_array($hapus);
	if ($r['foto'] != '') {
		$foto = $r['foto'];
		// hapus file gambar yang berhubungan dengan berita tersebut
		unlink("../images/calonosis/$foto");
		$sql   = "DELETE FROM kandidat WHERE idkandidat='$id'";
	} else {
		$sql   = "DELETE FROM kandidat WHERE idkandidat='$id'";
	}

	$hapus = mysqli_query($sambungDB, $sql);
	if ($hapus) {
		//			echo 'Data Kelas Berhasil di Hapus ';
		//			echo '<a href="index.php">Kembali</a>';
		header("Location: ?u=calonosis");
	} else {
		echo 'Data Kelas GAGAL di Hapus';
		echo '<a href="index.php">Kembali</a>';
	}
}
