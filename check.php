<?php
ob_start();
session_start();
$id = $_POST["id"];
$pwd = $_POST["pwd"];

$uid = "jack";
$upwd = "123456";

if ($id == $uid && $pwd == $upwd) {
	$_SESSION["login"]="S";
	$_SESSION["id"]=$id;

	header('Location:catalog.php');
}
else{
	$_SESSION["login"]="F";
	echo "login failed,back to login page in 3 seconds";
	echo "<meta http-equiv='refresh' content='3;url=login.php'/>";
}





?>