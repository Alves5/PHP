<?php
if(isset($_COOKIE['login'])){
	setcookie('login');
	header("Location:index.php");
}

session_start();
session_destroy();
header("Location:index.php");
?>