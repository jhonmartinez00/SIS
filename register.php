<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>Student Information System</title>
</head>
<body>
	<div class="container">
		<form action="registerUser.php" method="post">
		<div class="login">
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Enter username">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Enter password">
		</div>			
		<select name="role">
			<option>Admin</option>
			<option>User</option>
		</select>
		<input type="submit" name="register" class="btn btn-primary" value="Register">
		</div>
		</form>
	</div>

</body>
</html>