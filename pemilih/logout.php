<?php 
session_start();
unset($_SESSION['idpemilih']);
unset($_SESSION['userpemilih']);
unset($_SESSION['namapemilih']);
unset($_SESSION['emailpemilih']);
unset($_SESSION['fotopemilih']);
echo '<script language="javascript">alert("BERHASIL LOGOUT")</script>';
echo "<script>window.location='../'</script>";
?>