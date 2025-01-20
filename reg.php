<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'post';
	$db = mysqli_connect($host, $user, $password, $database);
	$a = $_POST['login'];
	$b = $_POST['parol'];
	$c = $_POST['imya'];
	$lgn = $_COOKIE["login"];
	$sql = "INSERT INTO `avt` (`id`, `mail`, `pass`, `name`) VALUES (NULL, '$a', '$b', '$c')";
	mysqli_query($db, $sql);
	header('location: regvh.php');
?>