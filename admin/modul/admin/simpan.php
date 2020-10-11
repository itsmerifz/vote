<?php
include "session.php";
if(isset($_POST['simpan'])){
	include "../aksesDB.php";
	include "../uploadFile.php";
	$pengguna=$_POST['username'];
	$sandi	=md5(trim($_POST['password']));
	$nama	=$_POST['nama'];
	$jabatan=$_POST['jabatan'];
	$hp		=$_POST['hp'];
	$email	=$_POST['email'];
	$hakakses=$_POST['hakakses'];
	$aktif	=$_POST['aktif'];
	$lokasi =$_FILES['foto']['tmp_name'];
	$namafile=$_FILES['foto']['name'];
	$tipefile=$_FILES['foto']['type'];
	
	if(empty($lokasi)){
		$sql="INSERT INTO pengguna SET idpengguna='', username='$pengguna', password='$sandi', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif'";
	}else{
		$folder="../images/user/";
		$ukuran=100;
		UploadFoto($namafile,$folder,$ukuran);
		
		$sql="INSERT INTO pengguna SET idpengguna='', username='$pengguna', password='$sandi', nama='$nama', jabatan='$jabatan',hp='$hp',email='$email', hakakses='$hakakses', aktif='$aktif', foto='$namafile'";
	}
	$simpan=mysqli_query($sambungDB,$sql);
	if($simpan){
		header('Location:?u=admin&s=default');
		//echo "berhasil";
	}else{
		include "?u=admin&s=default";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
