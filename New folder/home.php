<?php 
include_once 'database.php';
session_start();
if(isset($_POST['logout'])){
	session_destroy();
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>Student Information System</title>
</head>
<body>
<div class="container">
	<h1 class="title">Student Information System</h1>
	<form action="" method="post">
		<input type="submit" name="logout" class="btn btn-danger logout" value="Logout">
	</form>
	<div class="container1">
	</div>