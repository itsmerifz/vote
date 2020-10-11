<?php
if (isset($_POST['simpan'])) {
	include_once "../aksesDB.php";
	$id = $_POST['idp'];
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
			$sql = "UPDATE kandidat SET username='$username', nama='$nama', nokandidat='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif' WHERE idkandidat='$id'";
		} else {
			include "../uploadFile.php";
			$folder = "../images/calonosis/";
			$ukuran = 100;
			UploadFoto($namafile, $folder, $ukuran);
			$sql = "UPDATE kandidat SET username='$username', nama='$nama', nokandidat='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif', foto='$namafile' WHERE idkandidat='$id'";
		}
	} else {
		if (empty($lokasi)) {
			$sql = "UPDATE kandidat SET username='$username', password='$sandi', nama='$nama', nokandidat='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif' WHERE idkandidat='$id'";
		} else {
			include "../uploadFile.php";
			$folder = "../images/calonosis/";
			$ukuran = 100;
			UploadFoto($namafile, $folder, $ukuran);
			$sql = "UPDATE kandidat SET username='$username', password='$sandi', nama='$nama', nokandidat='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif' WHERE idkandidat='$id'";
		}
	}
	$simpan = mysqli_query($sambungDB, $sql);
	//var_dump($sql);
	if ($simpan) {
		header('Location:menuindex.php?u=calonosis&s=default');
		//echo "berhasil";
	} else {
		//echo "gagal alias tidak berhasil, kemungkinan username sudah digunakan";
		include "menuindex.php?u=calonosis&s=default";
		echo '<script language="JavaScript">';
		echo 'alert("Data Gagal diupdate, kemungkinan username sudah digunakan.")';
		echo '</script>';
		//var_dump($sql);
	}
} else {
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
