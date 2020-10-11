<!DOCTYPE HTML>

<html>

<head>
	<title>Login Page</title>
	<link rel="shortcut icon" href="images/iconweb.png">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<a href="#" class="logo">E-Voting m21m</a>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul class="links">
				<li><a href="/VotingM21M/index.php">Home</a></li>
				<li><a href="/VotingM21M/index.php#kandidat" class="scrolly">Daftar Kandidat</a></li>
				<li class="active"><a href="login.php">Login</a></li>
			</ul>
			<ul class="icons">
				<li><a href="https://twitter.com/manmodel1manado" target="__blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/manmodelmanado" target="__blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/manmodel1manado/" target="__blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="https://manmodelmanado.sch.id" target="__blank" class="fa fa-globe" style="font-size: 20px"></a></li>
			</ul>
		</nav>

		<!-- Main -->

		<body>

			<div id="main">

				<div class="login">
					<center>
						<h1 style="font-size: 30px">Login</h1>
					</center>
					<link rel="stylesheet" href="assets/css/style.css">

					<form action="loginTo.php" method="POST">
						<p>
							<center><label style="font-size: 20px">Username</label>
								<input type="text" style="width: 50%" style="font-family: Arial, Helvetica, sans-serif" class="login__input name" name="username" autofocus required></center>
						</p>
						<p>
							<center><label style="font-size: 20px">Password</label>
								<input type="password" style="width: 50%" class="login__input pass" name="password" autofocus required></center>
						</p>
						<center><input type="submit" name="simpan" value="Login" class="header" /></center>

				</div>
				</form>
			</div>
		</body>

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