<?php include "atas.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Login Pemilih E-Voting OSIS-MPK | MAN MODEL 1 MANADO
			<small>Pemilihan Kandidat OSIS-MPK</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="."><i class="fa fa-dashboard"></i> Beranda</a></li>
			<li><a href="?u=pemilih"><i class="fa fa-laptop"></i> Pemilih</a></li>
			<li class="active">Profil</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Profil Pemilih</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<?php
						$id = $_SESSION['idpemilih'];
						include "../aksesDB.php";
						$sql = "SELECT * FROM pemilih WHERE nis='$id'";
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
									<td><?php echo $r['jk'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
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
									<td>Aktif</td>
									<td><?php echo $r['aktif']; ?></td>
								</tr>
								<tr>
									<td>Foto</td>
									<td>
										<?php
										if ($r['foto'] != '') {
											echo "<img src=\"../images/user/$r[foto]\" height=150 />";
										} else {
											echo "<img src=\"../images/user/0.jpg\">";
										}
										?>
								</tr>
								<tr>
									<td colspan=2>
										<a href="?u=pemilih&s=edit&nis=<?php echo $id; ?>" class="btn btn-large btn-primary"><i class="fa fa-times"></i> Edit</a>
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