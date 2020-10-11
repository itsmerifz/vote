<?php
if (isset($_POST['simpan'])) {
	include "../aksesDB.php";
	include "../uploadFile.php";
	$pengguna = $_POST['username'];
	$sandi	= md5($_POST['password']);
	$nama	= $_POST['nama'];
	$nis	= $_POST['nis'];
	$hp		= $_POST['hp'];
	$email	= $_POST['email'];
	$jk		= $_POST['jk'];
	$tempatl = $_POST['tempatl'];
	$tanggall = $_POST['tanggall'];
	$idkelas = $_POST['idkelas'];
	$aktif = $_POST['aktif'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$namafile = $_FILES['foto']['name'];
	$tipefile = $_FILES['foto']['type'];

	if (empty($pengguna) && empty($_POST['password'])) {
		$pengguna = $nis;
		$sandi = md5($nama);
	} else if (!empty($pengguna) && empty($_POST['password'])) {
		$sandi = md5($nama);
	} else if (empty($pengguna) && !empty($_POST['password'])) {
		$pengguna = $nis;
	}
	if (empty($lokasi)) {
		$sql = "INSERT INTO pemilih SET nis='$nis', username='$pengguna', password='$sandi', nama='$nama', jk='$jk',hp='$hp',email='$email', tempatlahir='$tempatl', tanggallahir='$tanggall', aktif='$aktif', idkelas='$idkelas'";
	} else {
		$folder = "../images/user/";
		$ukuran = 100;
		UploadFoto($namafile, $folder, $ukuran);

		$sql = "INSERT INTO pemilih SET nis='$nis', username='$pengguna', password='$sandi', nama='$nama', jk='$jk',hp='$hp',email='$email', tempatlahir='$tempatl', tanggallahir='$tanggall', aktif='$aktif', idkelas='$idkelas', foto='$namafile'";
	}
	$simpan = mysqli_query($sambungDB, $sql);
	if ($simpan) {
		header('Location:menuindex.php?u=pemilih&s=default');
		//echo "berhasil";
	} else {
		include "menuindex.php?u=pemilih&s=default";
		echo '<script language="JavaScript">';
		echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
} else {
	echo '<script>window.history.back()</script>';
}
