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
			<li class="active">Tambah</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Tambah pemilih</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<!--Mulai buat form-->
						<form action="?u=pemilih&s=simpan" method="post" enctype="multipart/form-data">
							<table id="pilkasis1" class="table table-bordered table-hover table-striped">
								<tbody>
									<tr>
										<td>Username</td>
										<td><input type="text" name="username" placeholder="Username" size="25px" maxlength="25px" /><small> Kosongkan untuk username=No Induk pemilih</small></td>
									</tr>
									<tr>
										<td>Password</td>
										<td><input type="password" name="password" placeholder="Password" size="25px" /><small> Kosongkan untuk Password=Nama Lengkap</small></td>
									</tr>
									<tr>
										<td width=174>No Identitas(NIS/NIP)*</td>
										<td><input type="number" name="nis" placeholder="Nomor Induk" size="17px" maxlength="16px" required /><small> maksimal 16 karakter</small></td>
									</tr>
									<tr>
										<td>Nama Lengkap*</td>
										<td><input type="text" name="nama" placeholder="Nama" size="50px" maxlength="50px" required /></td>
									</tr>
									<tr>
										<td>Jenis Kelamin</td>
										<td><input type="radio" name="jk" id="jkl" value="L" checked />Laki-laki &nbsp;&nbsp;
											<input type="radio" name="jk" id="jkp" value="P" />Perempuan</td>
									</tr>

									<tr>
										<td>Tempat Lahir</td>
										<td><input type="text" name="tempatl" placeholder="Tempat Lahir" size="25px" maxlength="30px" /></td>
									</tr>
									<tr>
										<td>Tanggal Lahir</td>
										<td><input type="date" name="tanggall" placeholder="Tanggal Lahir" value="<?php $thn = date('Y');
																													$t = $thn - 16;
																													$tgl = $t . "-" . date('m-d');
																													echo $tgl; ?>" /><small>Gunakan browser chrome atau Opera - mm/dd/yyyy</small></td>
									</tr>
									<tr>
										<td>Handphone</td>
										<td><input type="text" name="hp" placeholder="HP" size="15px" maxlength="15px" /></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><input type="email" name="email" placeholder="Email" size="50px" maxlength="50px" /></td>
									</tr>
									<tr>
										<td>Kelas</td>
										<td>
											<select name="idkelas" required>
												<?php
												include "../aksesDB.php";
												$sql = "SELECT * FROM kelas ORDER BY kelas";
												$query = mysqli_query($sambungDB, $sql);
												while ($r = mysqli_fetch_assoc($query)) {
													echo "<option value='" . $r['idkelas'] . "'>" . $r['kelas'] . "</option>";
												}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Aktifkan</td>
										<td><input type="radio" name="aktif" id="aktifY" value="Y" />Ya &nbsp;&nbsp;
											<input type="radio" name="aktif" id="aktifT" value="T" checked />Tidak</td>
									</tr>
									<tr>
										<td>Foto</td>
										<td><input type="file" name="foto" accept="image/*" /></td>
									</tr>
									<tr>
										<td colspan=3>
											<input type="submit" name="simpan" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
											<input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
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