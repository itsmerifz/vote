<?php 
session_start();
unset($_SESSION['idkandidat']);
unset($_SESSION['userkandidat']);
unset($_SESSION['namakandidat']);
unset($_SESSION['jabatankandidat']);
unset($_SESSION['hakakseskandidat']);
unset($_SESSION['fotokandidat']);
echo '<script language="javascript">alert("BERHASIL LOGOUT")</script>';
echo "<script>window.location='../'</script>";
?>