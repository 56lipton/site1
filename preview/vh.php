<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'post';
	$db = mysqli_connect($host, $user, $password, $database);
	$d = $_POST['log'];
	$e = $_POST['par'];
	$sql = "SELECT * FROM `avt` WHERE `mail`='$d' AND `pass`= '$e'";
	if (mysqli_num_rows(mysqli_query($db, $sql)) < 1){
		header('location: regvh.php');
	} else {
		header('location: lk.php');
		setcookie("login", $d);
	}
?>