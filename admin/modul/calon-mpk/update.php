<?php
if (isset($_POST['simpan'])) {
	include "../aksesDB.php";
	$id = $_POST['id'];
	$username = $_POST['username'];
	$sandi	= md5($_POST['password']);
	$nama	= $_POST['nama'];
	$nokandidat = $_POST['nokandidat'];
	$visi	= $_POST['visi'];
	$misi	= $_POST['misi'];
	$aktif	= $_POST['aktif'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$namafile = $_FILES['foto']['name'];
	$tipefile = $_FILES['foto']['type'];

	if (empty($_POST['password'])) {
		if (empty($lokasi)) {
			$sql = "UPDATE kandidat2 SET username='$username', nama='$nama', nokandidat2='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif' WHERE idkandidat2='$id'";
		} else {
			include "../uploadFile.php";
			$folder = "../images/calonmpk/";
			$ukuran = 100;
			UploadFoto($namafile, $folder, $ukuran);
			$sql = "UPDATE kandidat2 SET username='$username', nama='$nama', nokandidat2='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif', foto='$namafile' WHERE idkandidat2='$id'";
		}
	} else {
		if (empty($lokasi)) {
			$sql = "UPDATE kandidat2 SET username='$username', password='$sandi', nama='$nama', nokandidat2='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif' WHERE idkandidat2='$id'";
		} else {
			include "../uploadFile.php";
			$folder = "../images/calonmpk/";
			$ukuran = 100;
			UploadFoto($namafile, $folder, $ukuran);
			$sql = "UPDATE kandidat2 SET username='$username', password='$sandi', nama='$nama', nokandidat2='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif', foto='$namafile' WHERE idkandidat2='$id'";
		}
	}
	$simpan = mysqli_query($sambungDB, $sql);
	//var_dump($sql);
	if ($simpan) {
		header('Location:menuindex.php?u=calonmpk&s=default');
		//echo "berhasil";
	} else {
		echo "gagal alias tidak berhasil";
		include "menuindex.php?u=calonmpk&s=default";
		echo '<script language="JavaScript">';
		echo 'alert("Data Gagal diupdate.")';
		echo '</script>';
		//var_dump($sql);
	}
} else {
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
