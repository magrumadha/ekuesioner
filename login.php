<?php
include ("phpclass/class.login.php");
?>
<html>
	<head>
		<title>Sistem Informasi E-Kuesioner</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link href="css/ekuesioner.css" rel="stylesheet" type="text/css">
		<link href="css/login.css" rel="stylesheet" type="text/css">
		<link href="css/box.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/myajax.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	</head>

	<body style="background-image: url(img/pattern.png), url(img/background_login.jpg); background-position: center 0%;" onLoad="customValidLoad()">
		<center>
			<a><h2 class="textheader">Sistem Informasi E-Kuesioner Dosen
			<br>
			STMIK Kharisma Karawang</h2></a>
			<p><img src='img/logo_kharisma.png' alt='Logo Kharisma'>
			</p>
			<p>
				&nbsp;
			</p>
			<div>
				<section id="content">
					<form action="" name="fm-login" id="fm-login" onSubmit="loginuser(); return false;">
						<div id="info">
							<h1>Silahkan Login </h1>
						</div>

						<p id="status">
							<span></span>
						</p>
						<div>
							<input type="text" placeholder="Username" required minLength="4" id="username" autofocus oninput="checkValidUserName(this)"/>
						</div>
						<div>
							<input type="password" placeholder="Password" id="password" required oninput="checkValidPassword(this)"/>
						</div>
						<div>
							<input type="submit" value="Log in" id="login" class="button blue"/ >
						</div>
					</form><!-- form -->
				</section><!-- content -->
			</div><!-- container -->
		</center>
	</body>
</html>

