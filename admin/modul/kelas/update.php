<?php
if(isset($_POST['simpan'])){
	include "../aksesDB.php";
	$id=$_POST['id'];
	$kelas=$_POST['kelas'];
	$jumlah	=$_POST['jumlah'];

	$sql="UPDATE kelas SET kelas='$kelas', jumlah='$jumlah' WHERE idkelas='$id'";
	$simpan=mysqli_query($sambungDB,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:menuindex.php?u=kelas&s=default');
		//echo "berhasil";
	}else{
		include "menuindex.php?u=kelas&s=default";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal diupdate.")';
		echo '</script>';
		//var_dump($sql);
	}
}else{
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
?>
