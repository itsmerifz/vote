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
      <li><a href="."><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li><a href="?u=calonosis"><i class="fa fa-laptop"></i> Calon Osis</a></li>
      <li class="active">Daftar</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="?u=calonosis&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah Kandidat OSIS</a>
            <h3 class="box-title">Daftar Kandidat OSIS</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <?php
            include "../aksesDB.php";
            $sql = "SELECT * FROM kandidat ORDER BY idkandidat";
            $query = mysqli_query($sambungDB, $sql);
            if (mysqli_num_rows($query) == 0) {
              echo '          <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>No K</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
         ';
              echo "<td colspan='6'>Data Masih Kosong</td>";
            } else {
              echo '          <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>No K</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
        ';
              $no = 1;
              while ($r = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td><a href='?u=calonosis&s=detail&nip=" . $r['idkandidat'] . "'>" . $r['username'] . "</a></td>";
                echo "<td>" . $r['nama'] . "</td>";
                echo "<td>" . $r['nokandidat'] . "</td>";
                echo "<td>" . $r['visi'] . "</td>";
                echo "<td>" . $r['misi'] . "</td>";
                echo '<td width=60><a href="menuindex.php?u=calonosis&s=edit&idp=' . $r['idkandidat'] . '"><i class="fa fa-edit"></i></a> | <a href="menuindex.php?u=calonosis&s=hapus&idp=' . $r['idkandidat'] . '" onclick="return confirm(\'Yakin Akan dihapus?\')"><i class="fa fa-remove"></i></a></td>';
                echo "</tr>";
                $no++;
              }
            }
            ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>No K</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Opsi</th>
              </tr>
            </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <?php include "bawah.php"; ?>