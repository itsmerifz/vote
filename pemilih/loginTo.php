<?php
include_once "../aksesDB.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);
$query = "SELECT * FROM pemilih WHERE username='$user' AND password='$pass' AND aktif='Y'";
$masuk = mysqli_query($sambungDB, $query);
$akses = mysqli_num_rows($masuk);
$x = mysqli_fetch_array($masuk);

if ($akses > 0) {
    session_start();
    $_SESSION['idpemilih'] = $x['nis'];
    $_SESSION['userpemilih'] = $x['username'];
    $_SESSION['namapemilih'] = $x['nama'];
    $_SESSION['emailpemilih'] = $x['email'];
    $_SESSION['kelaspemilih'] = $x['idkelas'];
    if ($x['foto'] == '') {
        $_SESSION['fotopemilih'] = 'admin.jpg';
    } else {
        $_SESSION['fotopemilih'] = $x['foto'];
    }
    header('location: index.php?u=default');
} else {
    include "login.php";
    echo '<script language="javascript">';
    echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
    echo '</script>';
}
?>