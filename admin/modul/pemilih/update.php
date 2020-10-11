<?php
if (isset($_POST['simpan'])) {
	include_once "../aksesDB.php";
	$id = $_POST['nis'];
	$pengguna = $_POST['username'];
	$sandi	= md5($_POST['password']);
	$nama	= $_POST['nama'];
	$jk		= $_POST['jk'];
	$hp		= $_POST['hp'];
	$email	= $_POST['email'];
	$tanggall = $_POST['tanggall'];
	$tempatl = $_POST['tempatl'];
	$idkelas = $_POST['kelas'];
	$aktif = $_POST['aktif'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$namafile = $_FILES['foto']['name'];
	$tipefile = $_FILES['foto']['type'];

	if (empty($_POST['password'])) {
		if (empty($lokasi)) {
			$sql = "UPDATE pemilih SET username='$pengguna', nama='$nama', jk='$jk', hp='$hp', email='$email', idkelas='$idkelas', tanggallahir='$tanggall', tempatlahir='$tempatl', aktif='$aktif' WHERE nis='$id'";
		} else {
			include "../uploadFile.php";
			$folder = "../images/user/";
			$ukuran = 100;
			UploadFoto($namafile, $folder, $ukuran);
			$sql = "UPDATE pemilih SET username='$pengguna', nama='$nama', jk='$jk', hp='$hp', email='$email', idkelas='$idkelas', tanggallahir='$tanggall', tempatlahir='$tempatl', aktif='$aktif', foto='$namafile' WHERE nis='$id'";
		}
	} else {
		if (empty($lokasi)) {
			$sql = "UPDATE pemilih SET username='$pengguna', nama='$nama', jk='$jk', hp='$hp', email='$email', idkelas='$idkelas', tanggallahir='$tanggall', tempatlahir='$tempatl', password='$sandi', aktif='$aktif' WHERE nis='$id'";
		} else {
			include "../uploadFile.php";
			$folder = "../images/user/";
			$ukuran = 100;
			UploadFoto($namafile, $folder, $ukuran);
			$sql = "UPDATE pemilih SET username='$pengguna', nama='$nama', jk='$jk', hp='$hp', email='$email', idkelas='$idkelas', tanggallahir='$tanggall', tempatlahir='$tempatl', password='$sandi', aktif='$aktif', foto='$namafile' WHERE nis='$id'";
		}
	}
	$simpan = mysqli_query($sambungDB, $sql);
	//var_dump($sql);
	if ($simpan) {
		header('Location:menuindex.php?u=pemilih');
		//echo "berhasil";
	} else {
		//echo "gagal alias tidak berhasil";
		include "menuindex.php?u=pemilih&s=default";
		echo '<script language="JavaScript">';
		echo 'alert("Data Gagal diupdate.")';
		echo '</script>';
		//var_dump($sql);
	}
} else {
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
