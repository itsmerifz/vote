<?php
if (isset($_POST['simpan'])) {
	include "../aksesDB.php";
	include "../uploadFile.php";
	$kandidat=$_POST['username'];
	$sandi	=md5($_POST['password']);
	$nama	=$_POST['nama'];
	$nokandidat=$_POST['nokandidat'];
	$aktif	=$_POST['aktif'];
	$visi	=$_POST['visi'];
	$misi	=$_POST['misi'];

	if(empty($kandidat) && empty($_POST['password'])){
		$kandidat=$nama; $sandi=md5($nama);
	}else if(!empty($kandidat) && empty($_POST['password'])){
		$sandi=md5($nama);
	}else if(empty($kandidat) && !empty($_POST['password'])){
		$kandidat=$nama;
	}
	if (empty($lokasi)) {
		$sql = "INSERT INTO kandidat SET idkandidat='', username='$kandidat', password='$sandi', nama='$nama', nokandidat='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif'";
	} else {
		$folder = "../images/calonosis/";
		$ukuran = 150;
		UploadFoto($namafile, $folder, $ukuran);
		//kecilkangambar($tujuan, 150);

		$sql="INSERT INTO kandidat SET idkandidat='', username='$kandidat', password='$sandi', nama='$nama', nokandidat='$nokandidat', visi='$visi', misi='$misi', aktif='$aktif', foto='$namafile'";
	}
	$simpan = mysqli_query($sambungDB, $sql);
	if ($simpan) {
		header('Location:menuindex.php?u=calonosis');
		//echo "berhasil";
	} else {
		include "?u=calonosis";
		echo '<script language="JavaScript">';
		echo 'alert("Data Gagal Ditambahkan, kemungkinan username sudah digunakan.")';
		echo '</script>';
		//var_dump($sql);
	}
} else {
	echo '<script>window.history.back()</script>';
}
