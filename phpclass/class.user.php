<?php
// @(#) class.user.php
// +-----------------------------------------------------------------------+
// | Copyright (C) 2014, http://ekuesioner                                |
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
// | Author: magrumadha                                                           |
// +-----------------------------------------------------------------------+
//
require("class.sqldb.php");
class user
{ 
	function __construct($__code,$__title) {
			$this->code = $__code;
			$this->title = $__title;
	}
		   
	function user_item($_code,$_title){
			__construct($_code,$_title);
	}	
		
	
	function destroyUser($username){
		$db=new sqldb();
		$where = "username = '$username'";
		if($db->sql_delete("login",$where,true)){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('errorMsg'=>'Some errors occured.'));
		}		
	}
	
	function updateUser($username,$password,$akses){
		$db=new sqldb();
		$edited[0] = array("username",$username);
		if(strlen($password) < 32){
			$edited[1] = array("password",md5(sha1($password)));
		}else{
			$edited[1] = array("password",$password);
		}
		$edited[2] = array("akses",$akses);
		$where = "username = '$username'";
		if($db->sql_update($edited,$where,"login",true)){
			echo json_encode(array(
				'username' => $username,
				'password' => $password,
				'akses' => $akses
			));
		} else {
			echo json_encode(array('errorMsg'=>'Some errors occured.'));
		}
	}
	
	function searchUser($page,$rows,$search){
		$db=new sqldb();
		$_page = $page;
		$_rows = $rows;
		$offset = ($_page-1)*$_rows;
		$result = array();
		
		$sql = "select count(*) from login where username like '%$search%' or akses like '%$search%'";
		$row = $db->sql_select($sql);
		$result["total"] = $row[0]["count(*)"];

		$sql = "select * from login where username like '%$search%' or akses like '%$search%' limit $offset,$_rows";
		$rs = $db->sql_select($sql);
		
		$items = array();
		for($x=0;$x<sizeof($rs);$x++){
			array_push($items, array("username"=>$rs[$x]["username"],
									"password"=>$rs[$x]["password"],
									"akses"=>$rs[$x]["akses"]));
		}
		$result["rows"] = $items;

		echo json_encode($result);
	}
	
	function getUser($page,$rows){
		$db=new sqldb();
		$_page = $page;
		$_rows = $rows;
		$offset = ($_page-1)*$_rows;
		$result = array();
		
		$sql = "select count(*) from login";
		$row = $db->sql_select($sql);
		$result["total"] = $row[0]["count(*)"];

		$sql = "select * from login limit $offset,$_rows";
		$rs = $db->sql_select($sql);
		$items = array();
		for($x=0;$x<sizeof($rs);$x++){
			array_push($items, array("username"=>$rs[$x]["username"],
									"password"=>$rs[$x]["password"],
									"akses"=>$rs[$x]["akses"]));
		}
		$result["rows"] = $items;

		echo json_encode($result);
	}
	
	function saveUser($username,$password,$akses){
		$db=new sqldb();
		$new[0] = $username;
		$new[1] = md5(sha1($password));
		$new[2] = $akses;
		if($db->sql_insert($new,"login",true)){
			echo json_encode(array(
				'username' => $username,
				'password' => $password,
				'akses' => $akses
			));
		} else {
			echo json_encode(array('errorMsg'=>'Some errors occured.'));
		}
	}
	
	function doLogout(){
		session_destroy();
		return true;
	}
	
	function getUsername(){
		if($this->getSession())
			return $this->username;
		else
			return '';
	}
	
	function getSession(){
		$db=new sqldb();
		$session = $_SESSION['password'];
		$sql='select * from user where password="'.$session.'"';
		$result=$db->sql_select($sql);
		if(sizeof($result)>0){
		        return true;
		}else{
		        return false;
		}
	}
	
	function doLogin($user,$pass){
		$this->username = $user;
		$this->password = md5(sha1($pass));
		$db=new sqldb();
		$sql='select * from user where username="'.$this->username.'" and password="'.$this->password.'"';
		$result=$db->sql_select($sql);
		if(sizeof($result)>0){
			if($result[0]["username"]!="" && $result[0]["password"]!=""){
				$_SESSION['user'] = $result[0]["username"];
			 	$_SESSION['password'] = $result[0]["password"];
			 	$_SESSION['akses'] = $result[0]["akses"];
				$this->accessType = $result[0]["akses"];
		                return true;
			}
			else{
				session_destroy();
				return false;
			}			
		}
		else{
			return false;
		}
	}
	
}
?>
