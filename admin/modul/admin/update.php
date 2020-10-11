<?php
if (isset($_POST['simpan'])) {
	include "../aksesDB.php";
	$id = $_POST['id'];
	$pengguna = $_POST['username'];
	$sandi	= md5($_POST['password']);
	$nama	= $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	$hp		= $_POST['hp'];
	$email	= $_POST['email'];
	$hakakses = $_POST['hakakses'];
	$aktif	= $_POST['aktif'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$namafile = $_FILES['foto']['name'];
	$tipefile = $_FILES['foto']['type'];

	if (empty($_POST['password'])) {
		if (empty($lokasi)) {
			$sql = "UPDATE pengguna SET username='$pengguna', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif' WHERE idpengguna='$id'";
		} else {
			include "../uploadFile.php";
			$folder = "../images/user/";
			$ukuran = 100;
			UploadFoto($namafile, $folder, $ukuran);
			$sql = "UPDATE pengguna SET username='$pengguna', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif', foto='$namafile' WHERE idpengguna='$id'";
		}
	} else {
		if (empty($lokasi)) {
			$sql = "UPDATE pengguna SET username='$pengguna', password='$sandi', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif' WHERE idpengguna='$id'";
		} else {
			include "../uploadFile.php";
			$folder = "../images/user/";
			$ukuran = 100;
			UploadFoto($namafile, $folder, $ukuran);
			$sql = "UPDATE pengguna SET username='$pengguna', password='$sandi', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif', foto='$namafile' WHERE idpengguna='$id'";
		}
	}
	$simpan = mysqli_query($sambungDB, $sql);
	//var_dump($sql);
	if ($simpan) {
		//$_SESSION['idkasis'] 		= $b['idpengguna'];
		$_SESSION['userkandidat'] 		= $pengguna;
		$_SESSION['namakandidat'] 		= $nama;
		$_SESSION['jabatankandidat'] 	= $jabatan;
		$_SESSION['hakakseskandidat'] 	= $hakakses;
		if (!empty($lokasi)) {
			$_SESSION['fotokandidat'] 	= $namafile;
		}
		header('Location:menuindex.php?u=admin&s=default');
		//echo "berhasil";
	} else {
		echo "gagal alias tidak berhasil";
		include "menuindex.php?u=admin&s=default";
		echo '<script language="JavaScript">';
		echo 'alert("Data Gagal diupdate.")';
		echo '</script>';
		//var_dump($sql);
	}
} else {
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
