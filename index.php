<!DOCTYPE HTML>

<html>

<head>
	<title>E-Voting | MAN MODEL 1 MANADO</title>
	<link rel="shortcut icon" href="images/iconweb.png">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel=”stylesheet” href=”assets/css/bootstrap.min.css”/> <script src="assets/js/jquery.2.1.1.min.js">
	</script>
	<script src="assets/js/zero.js"></script>
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper" class="fade-in">

		<!-- Intro -->
		<div id="intro">
			<h1>E- Voting OSIS-MPK<br />
				MAN MODEL 1 MANADO</h1>
			<p>Webpage Resmi E-Voting MAN MODEL 1 MANADO</p>
			<ul class="actions">
				<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
			</ul>
		</div>

		<!-- Header -->
		<header id="header">
			<a href="#" class="logo">E-Voting M21M</a>
		</header>

		<!-- Nav -->
		<nav id="nav">

			<ul class="links">
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="#kandidat" class="scrolly" itle="Daftar Kandidat">Daftar Kandidat</a></li>
				<li><a href="pemilih/login.php">Login</a></li>
				<li><a href="admin/login.php">Admin</a></li>
			</ul>
			<ul class="icons">
				<li><a href="https://twitter.com/manmodel1manado" target="__blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/manmodelmanado" target="__blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/manmodel1manado/" target="__blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="https://manmodelmanado.sch.id" target="__blank" class="fa fa-globe" style="font-size: 20px"></a></li>
			</ul>

		</nav>

		<!-- Main -->
		<div id="main">

			<!-- Featured Post -->
			<article class="post featured">
				<header class="major">
					<h2><a href="#">pilih kandidatmu<br />
							hanya dalam sentuhan</a></h2>
				</header>
				<ul class="actions special">
					<li><a href="pemilih/login.php" class="button large">Vote sekarang</a></li>
				</ul>
			</article>

			<!-- Posts -->
			<center>
				<h2 id="title-about" style="font-size: 48px">Hitung Cepat Kandidat OSIS</h2>
			</center>
			<div class="row content" id="kandidat">
				<?php
				include_once "aksesDB.php";
				$sqljs = "SELECT sum(jumlahsuara) as js FROM kandidat";
				$queryjs = mysqli_query($sambungDB, $sqljs);
				$rjs = mysqli_fetch_array($queryjs);

				$querysql = "SELECT * FROM kandidat ORDER BY nokandidat";
				$sql = mysqli_query($sambungDB, $querysql);
				while ($r = mysqli_fetch_array($sql)) {
					echo '<div class="col-md-6 col-sm-6" id="text-about-left" style="font-size: 9px">
												<center>';
					echo "<h3>No. " . $r['nokandidat'] . " - " . $r['nama'] . "</h3>";
					echo '<img src="images/calonosis/' . $r['foto'] . '" class="img-circle" height="150px" alt id="img-about' . $r['nokandidat'] . '">';
					echo "<h2>" . round(($r['jumlahsuara'] / $rjs['js'] * 100), 2) . "%</h2>";
					echo '					</center>
									<b>VISI:</b><br/>
									<center>' . $r['visi'] . '</center>
									<b>MISI:</b><br/>
									' . $r['misi'];
					echo				'</div>';
				}
				?>
			</div>
			<center>
				<h2 id="title-about" style="font-size: 48px">Hitung Cepat Kandidat MPK</h2>
			</center>
			<div class="row content" id="kandidat2">
				<?php
				include_once "aksesDB.php";
				$sqljs2 = "SELECT sum(jumlahsuara2) as js2 FROM kandidat2";
				$queryjs2 = mysqli_query($sambungDB, $sqljs2);
				$rjs2 = mysqli_fetch_array($queryjs2);

				$querysql2 = "SELECT * FROM kandidat2 ORDER BY nokandidat2";
				$sql2 = mysqli_query($sambungDB, $querysql2);
				while ($r = mysqli_fetch_array($sql2)) {
					echo '<div class="col-md-6 col-sm-6" id="text-about-left" style="font-size: 9px">
												<center>';
					echo "<h3>No. " . $r['nokandidat2'] . " - " . $r['nama'] . "</h3>";
					echo '<img src="images/calonmpk/' . $r['foto'] . '" class="img-circle" height="150px" alt id="img-about' . $r['nokandidat2'] . '">';
					echo "<h2>" . round(($r['jumlahsuara2'] / $rjs2['js2'] * 100), 2) . "%</h2>";
					echo '					</center>
									<b>VISI:</b><br/>
									<center>' . $r['visi'] . '</center>
									<b>MISI:</b><br/>
									' . $r['misi'];
					echo				'</div>';
				}
				?>

				</center>
			</div>



			<!-- Footer -->
			<center>
				<h2>Hubungi kami</h2>
			</center>
			<footer id="footer">

				<section>
					<form method="post" action="contact.php">
						<div class="fields">
							<div class="field">
								<label for="nama">Nama</label>
								<input type="text" name="nama" id="name" />
							</div>
							<div class="field">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" />
							</div>
							<div class="field">
								<label for="pesan">Pesan</label>
								<textarea name="pesan" id="message" rows="3"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Kirim Pesan" /></li>
						</ul>
					</form>
				</section>
				<section class="split contact">
					<section class="alt">
						<h3>Alamat</h3>
						<p> Jln. Hasanudin 14 Kel. Islam, Kec. Tuminting<br />
							Kota Manado, Sulawesi Utara</p>
					</section>
					<section>
						<h3>Telepon</h3>
						<p><a href="#">(0431) 864-492</a></p>
					</section>
					<section>
						<h3>Sosial Media</h3>
						<ul class="icons alt">
							<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
					</section>
		</div>
		</section>

		</footer>

		<!-- Copyright -->
		<div id="copyright">
			<ul>
				<li>&copy; 2020</li>
				<li>Created by: <a href="https://instagram.com/itsme_rifz">Muhammad Arief</a></li>
				<li>Template : <a href="https://html5up.net">Massively</a> by HTML5UP</li>
			</ul>
		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>