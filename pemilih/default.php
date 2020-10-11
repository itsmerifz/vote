<?php
include_once "atas.php";
include_once "../aksesDB.php";
//$sql="SELECT kandidat.idkandidat,nama,nokandidat,foto,count(idpemilihan) as kandidat,datapemilihan.idkandidat FROM kandidat FULL OUTER JOIN datapemilihan ON kandidat.idkandidat=datapemilihan.idkandidat";
//$sql="SELECT kandidat.idkandidat as idk,nama,nokandidat,foto, datapemilihan.idpemilihan,count(datapemilihan.idkandidat) as kandidat,datapemilihan.idkandidat FROM kandidat LEFT OUTER JOIN datapemilihan ON kandidat.idkandidat=datapemilihan.idkandidat ORDER BY nokandidat";
$sql = "SELECT * FROM kandidat ORDER BY nokandidat";
$query = mysqli_query($sambungDB, $sql);

$sqljs = "SELECT sum(jumlahsuara) as jsuara FROM kandidat";
$queryjs = mysqli_query($sambungDB, $sqljs);
$rjs = mysqli_fetch_array($queryjs);

$idpemilih = $_SESSION['idpemilih'];
$sqlpilih = "SELECT * FROM datapemilihan WHERE idpemilih='$idpemilih'";
$querypilih = mysqli_query($sambungDB, $sqlpilih);
$ada = mysqli_num_rows($querypilih);

$sql2 = "SELECT * FROM kandidat2 ORDER BY nokandidat2";
$query2 = mysqli_query($sambungDB,$sql2);

$sqljs2 = "SELECT sum(jumlahsuara2) as jsuara2 FROM kandidat2";
$queryjs2 = mysqli_query($sambungDB,$sqljs2);
$rjs2 = mysqli_fetch_array($queryjs2);

$idp2 = $_SESSION['idpemilih'];
$sqlpilih2 = "SELECT * FROM datapemilihan2 WHERE idpemilih='$idp2'";
$querypilih2 = mysqli_query($sambungDB,$sqlpilih2);
$cekada = mysqli_num_rows($querypilih2);

/*$sjumlah="SELECT count(idpemilihan) as kandidat,idkandidat FROM datapemilihan GROUP BY idkandidat ORDER BY idkandidat";
$qjumlah=mysqli_query($sambungDB,$sjumlah);
$j=mysqli_fetch_assoc($qjumlah);
*/
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      E-Voting OSIS-MPK | MAN MODEL 1 MANADO
      <small>Pemilihan Kandidat OSIS-MPK</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="."><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <h1>OSIS</h1>
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <?php
      //var_dump($sql);
      while ($r = mysqli_fetch_array($query)) {
        echo '        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">';
        echo "<h3>" . $r['nokandidat'] . "</h3>";
        echo $r['nama'] . "</b>";
        echo '            </div>
            <div class="icon">
              <img src="../images/calonosis/' . $r['foto'] . '" height="100px"/>
            </div>';
        if ($ada == 0) {
          echo '<a href="?u=pemilih&s=pilihan&id=' . $r['idkandidat'] . '" class="small-box-footer">Pilihan Anda? <i class="fa fa-arrow-circle-up"></i></a>';
        } else {
          echo '<a href="#" class="small-box-footer">Anda sudah memilih <i class="fa fa-check"></i></a>';
        }
        echo '  </div>
        </div>';
      }
      ?>
    </div>

  <!-- Main content -->
  <section class="content">
    <h1>MPK</h1>
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <?php
      //var_dump($sql);
      while ($r = mysqli_fetch_array($query2)) {
        echo '        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">';
        echo "<h3>" . $r['nokandidat2'] . "</h3>";
        echo $r['nama'] . "</b>";
        echo '            </div>
            <div class="icon">
              <img src="../images/calonmpk/' . $r['foto'] . '" height="100px"/>
            </div>';
        if ($cekada == 0) {
          echo '<a href="?u=pemilih&s=pilihanmpk&id=' . $r['idkandidat2'] . '" class="small-box-footer">Pilihan Anda? <i class="fa fa-arrow-circle-up"></i></a>';
        } else {
          echo '<a href="#" class="small-box-footer">Anda sudah memilih <i class="fa fa-check"></i></a>';
        }
        echo '  </div>
        </div>';
      }
      ?>
    </div>

    <!-- /.row -->

    <?php include "bawah.php"; ?>