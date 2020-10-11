<?php
include_once "../aksesDB.php";

$user = $_POST['user'];
$pass = $_POST['pass'];
$enc_pass = md5($pass);
$query = "SELECT * FROM pengguna WHERE username='$user' AND password='$enc_pass' AND aktif='Y'";
$masuk = mysqli_query($sambungDB, $query);
if(!$masuk){
    die(mysqli_error($sambungDB));
} else{
    $hasil = mysqli_num_rows($masuk);

    if ($hasil > 0) {
        $x = mysqli_fetch_array($masuk);
        session_start();
        $_SESSION['idkandidat']         = $x['idpengguna'];
        $_SESSION['userkandidat']       = $x['username'];
        $_SESSION['namakandidat']       = $x['nama'];
        $_SESSION['jabatankandidat']    = $x['jabatan'];
        $_SESSION['hakakseskandidat']   = $x['hakakses'];
        if ($x['foto'] == '') {
            $_SESSION['fotokandidat'] = 'admin.jpg';
        } else {
            $_SESSION['fotokandidat'] = $x['foto'];
        }
        header('location: menuindex.php?u=default');
    } else {
        include "login.php";
        echo '<script language="javascript">';
        echo 'alert ("salah")';
        echo '</script>';
    }
}
?>
