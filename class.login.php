<?php
// @(#) class.login.php
// +-----------------------------------------------------------------------+
// | Copyright (C) 2008, http://sismon                                  |
// +-----------------------------------------------------------------------+
// | This file is free software; you can redistribute it and/or modify     |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation; either version 2 of the License, or     |
// | (at your option) any later version.                                   |
// | This file is distributed in the hope that it will be useful           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of        |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the          |
// | GNU General Public License for more details.                          |
// +-----------------------------------------------------------------------+
// | Author: magrumadha                                                      |
// +-----------------------------------------------------------------------+
//

require ("pdo.crud.php");
class login_page {
	function __construct() {
		session_start();
		ob_start();
		if (isset($_SESSION['username'])) {
			$this -> username = $_SESSION['username'];
			$this -> accessType = $_SESSION['akses'];
		} else {
			$this -> username = '';
			$this -> password = '';
			$this -> accessType = '';
		}
	}

	function login_page() {
		__construct();
	}

	/** do login action **/
	function doLogin($username, $password) {
		$username = $username;
		$password = md5(sha1($password));
		$db = new crud();
		$result = array();
		$table = "tbuser";
		$field = "*";
		$where = "username='" . $username . "' and password='" . $password . "'";
		//$sql='select * from tbuser where username="'.$this->username.'" and password="'.$this->password.'"';
		$result = $db -> select($table, $field, $where);
		//return $result['password'];
		if (sizeof($result) > 0) {
			//print_r($result);
			if ($result["username"] != "" && $result["password"] != "") {
				$_SESSION['username'] = $result["username"];
				$_SESSION['password'] = $result["password"];
				$_SESSION['akses'] = $result["akses"];
				return true;
			} else {
				session_destroy();
				return false;
			}
		} else {
			return false;
		}
	}

	/** get current session **/
	/*
	 function getSession(){
	 $db=new sqldb();
	 $session = $_SESSION['password'];
	 $sql='select * from tbuser where password="'.$session.'"';
	 $result=$db->sql_select($sql);
	 if(sizeof($result)>0){
	 return true;
	 }else{
	 return false;
	 }
	 }
	 */

	/** get current session access **/
	function getAccess() {
		return $this -> accessType;
	}

	/** get current username logged **/
	function getUsername() {
		if ($this -> getSession())
			return $this -> username;
		else
			return '';
	}

	/** do logout action **/
	function doLogout() {
		session_destroy();
		return true;
	}

	function getUserIP() {
		$client = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote = $_SERVER['REMOTE_ADDR'];

		if (filter_var($client, FILTER_VALIDATE_IP)) {
			$ip = $client;
		} elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
			$ip = $forward;
		} else {
			$ip = $remote;
		}

		return $ip;
	}

}
