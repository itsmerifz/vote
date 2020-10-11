<?php
include_once "../aksesDB.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);
$query = "SELECT * FROM pengguna WHERE username='$user' AND password='$pass' AND akses='Y'";
$masuk = mysqli_query($sambungDB, $query);
$akses = mysqli_num_rows($masuk);
$x = mysqli_fetch_array($masuk);

if ($akses > 0) {
    session_start();
    $_SESSION['idkandidat'] = $x['idpengguna'];
    $_SESSION['userkandidat'] = $x['username'];
    $_SESSION['namakandidat'] = $x['nama'];
    $_SESSION['jabatankandidat'] = $x['jabatan'];
    $_SESSION['akseskandidat'] = $x['akses'];
    if ($x['foto'] == '') {
        $_SESSION['fotokandidat'] = 'admin.jpg';
    } else {
        $_SESSION['fotokandidat'] = $x['foto'];
    }
    header('location: index.php?u=default');
} else {
    include "login.php";
    echo '<script language="javascript">';
    echo 'alert ("salah")';
    echo '</script>';
}
