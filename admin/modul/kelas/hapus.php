<?php
if(isset($_GET['id'])){
	include "../aksesDB.php";
	$id=$_GET['id'];
	$sql   = "DELETE FROM kelas WHERE idkelas='$id'";
	$hapus = mysqli_query($sambungDB,$sql);
	if($hapus){
		header("Location: ?u=kelas");
	}else{
		include "index.php?u=kelas&s=default";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Dihapus.")';
		echo '</script>';
	}
}
?>
