<?php
if (isset($_POST['simpan'])) {
	include "../aksesDB.php";
	include "../uploadFile.php";
	$kandidat = $_POST['username'];
	$sandi	= md5($_POST['password']);
	$nama	= $_POST['nama'];
	$nokandidat = $_POST['nokandidat'];
	$aktif	= $_POST['aktif'];
	$visi	= $_POST['visi'];
	$misi	= $_POST['misi'];

	$lokasi = $_FILES['foto']['tmp_name'];
	$namafile = $_FILES['foto']['name'];
	$tipefile = $_FILES['foto']['type'];

	if (empty($pengguna) && empty($_POST['password'])) {
		$pengguna = $nama;
		$sandi = md5($nama);
	} else if (!empty($pengguna) && empty($_POST['password'])) {
		$sandi = md5($nama);
	} else if (empty($pengguna) && !empty($_POST['password'])) {
		$pengguna = $nama;
	}
	if (empty($lokasi)) {
		$sql = "INSERT INTO kandidat2 SET idkandidat2='', username='$kandidat', password='$sandi', nama='$nama', nokandidat2='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif'";
	} else {
		$folder = "../images/calonmpk/";
		$ukuran = 100;
		UploadFoto($namafile, $folder, $ukuran);

		$sql = "INSERT INTO kandidat2 SET idkandidat2='', username='$kandidat', password='$sandi', nama='$nama', nokandidat2='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif', foto='$namafile'";
	}
	$simpan = mysqli_query($sambungDB, $sql);
	if ($simpan) {
		header('Location:menuindex.php?u=calonmpk&s=default');
		//echo "berhasil";
	} else {
		include "menuindex.php?u=calonmpk&s=default";
		echo '<script language="JavaScript">';
		echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
} else {
	echo '<script>window.history.back()</script>';
}
