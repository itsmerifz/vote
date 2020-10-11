<?php include "atas.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrator E-Voting OSIS-MPK | MAN MODEL 1 MANADO
      <small>Pemilihan Ketua OSIS-MPK</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="menuindex.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
            include_once "../aksesDB.php";
            $sql = "SELECT count(idkelas) as jkelas FROM kelas";
            $query = mysqli_query($sambungDB, $sql);
            $r = mysqli_fetch_assoc($query);
            echo "<h3>" . $r['jkelas'] . "</h3>";
            ?>
            <p>Kelas Terdaftar</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="?u=kelas" class="small-box-footer">Info Kelas <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
            $sql = "SELECT count(username) as jumlah FROM pemilih WHERE aktif='Y'";
            $query = mysqli_query($sambungDB, $sql);
            $r = mysqli_fetch_assoc($query);
            echo "<h3>" . $r['jumlah'] . "</h3>";
            ?>
            <p>Pemilih Tercatat</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="?u=pemilih" class="small-box-footer">Info Pemilih <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php
            $sql = "SELECT count(idkandidat) as jumlah FROM kandidat WHERE aktif='Y'";
            $query = mysqli_query($sambungDB, $sql);
            $r = mysqli_fetch_assoc($query);
            echo "<h3>" . $r['jumlah'] . "</h3>";
            ?>
            <p>Kandidat OSIS</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="?u=calonosis" class="small-box-footer">Info Kandidat OSIS <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
            $sql = "SELECT count(idkandidat2) as jumlah FROM kandidat2 WHERE aktif='Y'";
            $query = mysqli_query($sambungDB, $sql);
            $r = mysqli_fetch_assoc($query);
            echo "<h3>" . $r['jumlah'] . "</h3>";
            ?> <p>Kandidat MPK</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="?u=calonmpk" class="small-box-footer">Info Kandidat MPK <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php
            $sql = "SELECT count(idpengguna) as jumlah FROM pengguna WHERE aktif='Y'";
            $query = mysqli_query($sambungDB, $sql);
            $r = mysqli_fetch_assoc($query);
            echo "<h3>" . $r['jumlah'] . "</h3>";
            ?> <p>Admin Aktif</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="?u=admin" class="small-box-footer">Info Admin <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

    </div>
    <!-- /.row -->

    <?php include "bawah.php"; ?>