<?php
if(isset($_POST['simpan'])){
	include "../aksesDB.php";
	$kelas	=$_POST['kelas'];
	$jumlah	=$_POST['jumlah'];

	$sql="INSERT INTO kelas SET kelas='$kelas', jumlah='$jumlah'";
	$simpan=mysqli_query($sambungDB,$sql);
	if($simpan){
		header('Location:menuindex.php?u=kelas&s=default');
		//echo "berhasil";
	}else{
		include "menuindex.php?u=kelas&s=default";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
