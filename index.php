<?php 
	session_start();
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
	<form action="login.php" method="post">
	<div class="login">
		<div class="form-group">
			<input type="text" name="username" placeholder="Enter Username" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Enter Password" class="form-control">
		</div>
		<input type="submit" name="login" class="btn btn-success" value="Login" id="loginBtn">
		<a class="register" href="register.php">Create a new Account?</a>
	</div>
	</form>
</div>
</body>
</html>