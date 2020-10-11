<?php 
if(empty($_SESSION['idpemilih']) and empty($_SESSION['userpemilih'])){
    header('location:login.php');
}
?>