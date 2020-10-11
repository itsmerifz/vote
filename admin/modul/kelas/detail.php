<?php include "atas.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrator E-Voting OSIS-MPK | MAN MODEL 1 MANADO
      <small>Pemilihan Ketua OSIS-MPK-MPK</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="menuindex.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li><a href="?u=kelas"><i class="fa fa-laptop"></i> Kelas</a></li>
      <li class="active">Detail</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Detail Kelas</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php
            $id = $_GET['id'];
            include "../aksesDB.php";
            $sql = "SELECT * FROM kelas WHERE idkelas='$id'";
            $query = mysqli_query($sambungDB, $sql);
            $r = mysqli_fetch_assoc($query);
            ?>
            <table id="pilkasis1" class="table table-bordered table-hover table-striped">
              <tbody>
                <tr>
                  <td width=150>Nama Kelas</td>
                  <td><?php echo $r['kelas']; ?></td>
                </tr>
                <tr>
                  <td>Jumlah pemilih</td>
                  <td><?php echo $r['jumlah']; ?></td>
                </tr>
                <tr>
                  <td colspan=2>
                    <a href="?u=kelas&s=edit&id=<?php echo $id; ?>" class="btn btn-large btn-primary"><i class="fa fa-times"></i> Edit</a>
                    <a href="?u=kelas" class="btn btn-large btn-danger"><i class="fa fa-times"></i> List</a></td>
                </tr>
              </tbody>
            </table>
            </form>
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