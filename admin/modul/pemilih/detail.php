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
			<li class="active">Detail</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Detail pemilih</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<?php
						$id = $_GET['nis'];
						include "../aksesDB.php";
						$sql = "SELECT pemilih.username, pemilih.nis, pemilih.nama, pemilih.jk, pemilih.tempatlahir, pemilih.tanggallahir, pemilih.hp, pemilih.email, pemilih.foto, pemilih.aktif, kelas.kelas FROM pemilih, kelas WHERE kelas.idkelas=pemilih.idkelas AND nis='$id'";
						$query = mysqli_query($sambungDB, $sql);
						$r = mysqli_fetch_assoc($query);
						?>
						<table id="pilkasis1" class="table table-bordered table-hover table-striped">
							<tbody>
								<tr>
									<td width=150>Nama Pengguna</td>
									<td><?php echo $r['username']; ?></td>
								</tr>
								<tr>
									<td>Nama Lengkap</td>
									<td><?php echo $r['nama']; ?></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td><?php echo $jk = $r['jk'] == "L" ? "Laki-laki" : "Perempuan"; ?></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td><?php echo $r['kelas']; ?></td>
								</tr>
								<tr>
									<td>Handphone</td>
									<td><?php echo $r['hp']; ?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><?php echo $r['email']; ?></td>
								</tr>
								<tr>
									<td>Tempat Lahir</td>
									<td><?php echo $r['tempatlahir']; ?></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td><?php echo $r['tanggallahir']; ?></td>
								</tr>
								<tr>
									<td>Aktif</td>
									<td><?php echo $r['aktif']; ?></td>
								</tr>
								<tr>
									<td>Foto</td>
									<td>
										<?php
										if ($r['foto'] != '') {
											echo "<img src=\"../images/user/$r[foto]\" width=150 />";
										} else {
											echo "<img src=\"../images/user/admin.jpg\">";
										}
										?>
								</tr>
								<tr>
									<td colspan=2>
										<a href="?u=pemilih&s=edit&nis=<?php echo $id; ?>" class="btn btn-large btn-primary"><i class="fa fa-times"></i> Edit</a>
										<a href="?u=pemilih" class="btn btn-large btn-danger"><i class="fa fa-times"></i> List</a></td>
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