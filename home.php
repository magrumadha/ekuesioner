<?php
include ("phpclass/class.login.php");
?>
<html>
	<head>
		<title>Sistem Informasi Aplikasi E-Kuesioner</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link href="css/ekuesioner.css" rel="stylesheet" type="text/css">
		<link href="css/login.css" rel="stylesheet" type="text/css">
		<link href="css/menu.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/table.css">
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link href="css/box.css" rel="stylesheet" type="text/css">
		<!--		<link rel="stylesheet" href="css/sky-forms-blue.css"> -->
		<script type="text/javascript" src="js/myajax.js"></script>
		<script type="text/javascript" src="js/loadpage.js"></script>
		<script type="text/javascript" src="js/prodi.js"></script>
	</head>

	<body style="background-image: url(img/pattern.png), url(img/bg-cyan.jpg); background-position: center 0%;" onLoad="LoadPage('init.php')" class="bg-blue">
		<center>
			<div class="header">
				<div align="left" style="margin-left:30px; ">
					<img src="img/logo_kharisma.png" alt="STMIK Kharisma" width="90" height="90" align="left" style="padding-top:5px">
				</div>
				<div align="left">
					<div style="margin-left:160px; height:40px; padding-top:20px;">
						<a class="textheader">Sistem Informasi E-Kuesioner Dosen STMIK Kharisma Karawang</a>
					</div>
					<div style="margin-left:160px; padding-top:-10px;">
						<div class="container">
							<nav class="nav">
								<ul class="nav-list">
									<li>
										<a href="#" class="nav-link">Home <span class="nav-counter nav-counter-green">4</span></a>
									</li>
									<li>
										<a href="#" class="nav-link" onClick="LoadPage('init2.php')">Hasil Kuesioner<span class="nav-counter">15</span></a>
									</li>
									<li>
										<a href="#" class="nav-link" onClick="LoadPage('mahasiswa.php');LoadSub('mahasiswa_data.php')">Mahasiswa</a>
									</li>
									<li>
										<a href="" class="nav-link">Dosen</a>
									</li>
									<li>
										<a href="" class="nav-link">Mata Kuliah</a>
									</li>
									<li>
										<a href="" class="nav-link">Mengajar</a>
									</li>
									<li>
										<a href="#" class="nav-link" onClick="LoadPage('prodi.php');
										LoadSub('prodi_data.php');checkAllProdi()">Program Studi</a>
									</li>
									<li>
										<a href="" class="nav-link">Soal Kuesioner</a>
									</li>
									<li>
										<a href="" class="nav-link">User</a>
									</li>
									<li>
										<a class="nav-user">Selamat Datang, Kucu</a>
									</li>
									<li>
										<a href="action.php?action=logout" class="nav-link">Logout</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>

			<div id="isi">

			</div>

			<div class="footer" >
				<div style="height:10px; margin-top:10px;"></div>
				<div style="margin-top:10px">
					<a class="textfooter">Copyright &copy; 2014</a>
				</div>

			</div>

		</center>
	</body>
</html>

