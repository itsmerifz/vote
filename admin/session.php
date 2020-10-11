<?php 
if(empty($_SESSION['idkandidat']) and empty($_SESSION['userkandidat'])){
    header('location:login.php');
}
?>