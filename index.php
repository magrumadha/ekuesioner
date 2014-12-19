<?php
include ("phpclass/class.login.php");
$log = new login_page();
if ($log -> getSession()) {
	echo '<script type="text/javascript">window.location.href="home.php";</script>';
} else {
	echo '<script type="text/javascript">window.location.href="login.php";</script>';
}
?>