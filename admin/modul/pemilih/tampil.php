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
      <li><a href="?u=pemilih"><i class="fa fa-laptop"></i> pemilih</a></li>
      <li class="active">Daftar</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="?u=pemilih&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah pemilih</a>
            <h3 class="box-title">Daftar pemilih</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <?php
            include "../aksesDB.php";
            $sql = "SELECT pemilih.*, kelas.kelas FROM pemilih,kelas WHERE kelas.idkelas=pemilih.idkelas ORDER BY nis";
            $query = mysqli_query($sambungDB, $sql);
            if (mysqli_num_rows($query) == 0) {
              echo '              <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>Username</th>
                  <th>No Identitas</th>
                  <th>Nama</th>
                  <th>JK</th>
                  <th>Kelas</th>
                  <th>Email</th>
                  <th>HP</th>
                  <th>Aktif</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>';
              echo "<td colspan='9'>Data Masih Kosong</td>";
            } else {
              echo '              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr bgcolor="#ccc">
                  <th>No</th>
                  <th>Username</th>
                  <th>No Identitas</th>
                  <th>Nama</th>
                  <th>JK</th>
                  <th>Kelas</th>
                  <th>Email</th>
                  <th>HP</th>
                  <th>Aktif</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>';
              $no = 1;
              while ($r = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td><a href='?u=pemilih&s=detail&nis=" . $r['nis'] . "'>" . $r['username'] . "</a></td>";
                echo "<td>" . $r['nis'] . "</td>";
                echo "<td>" . $r['nama'] . "</td>";
                echo "<td>" . $r['jk'] . "</td>";
                echo "<td>" . $r['kelas'] . "</td>";
                echo "<td>" . $r['email'] . "</td>";
                echo "<td>" . $r['hp'] . "</td>";
                echo "<td>" . $r['aktif'] . "</td>";
                echo '<td><a href="menuindex.php?u=pemilih&s=edit&nis=' . $r['nis'] . '"><i class="fa fa-edit"></i></a> | <a href="menuindex.php?u=pemilih&s=hapus&nis=' . $r['nis'] . '" onclick="return confirm(\'Yakin Akan dihapus?\')"><i class="fa fa-remove"></i></a></td>';
                echo "</tr>";
                $no++;
              }
            }
            ?>
            </tbody>
            <tfoot>
              <tr bgcolor="#ccc">
                <th>No</th>
                <th>Username</th>
                <th>No Identitas</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>HP</th>
                <th>Aktif</th>
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