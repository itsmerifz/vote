<?php
//if(isset($_POST['simpan'])){
include "session.php";
include "../aksesDB.php";
$tipe	= "Pemilih";
$pemilih = $_SESSION['idpemilih'];
$kandidat = $_GET['id'];
$sql = "INSERT INTO datapemilihan SET tipe='$tipe', idpemilih='$pemilih', idkandidat='$kandidat'";
$simpan = mysqli_query($sambungDB, $sql);
if ($simpan) {
	header('Location:index.php');
	$edit = "UPDATE kandidat SET jumlahsuara=jumlahsuara+1 WHERE idkandidat='$kandidat'";
	$update = mysqli_query($sambungDB, $edit);
	//echo "berhasil";
} else {
	include "index.php";
	echo '<script language="JavaScript">';
	echo 'alert("Data Gagal Ditambahkan.")';
	echo '</script>';
}
/*}else{
	echo '<script>window.history.back()</script>';
}*/
