<?php
include ("class.login.php");
$action = $_REQUEST['action'];
$username = $_POST['username'];
$password = $_POST['password'];
$log = new login_page();

switch($action) {
	case "login" :
		if ($log -> doLogin($username, $password)) {
			echo "success";
		} else {
			echo "failed";
		}
		break;
	case "logout" :
		if ($log -> doLogout()) {
			header("location:index.php");
		} else {
			echo "failed";
		}
		break;
}
?>