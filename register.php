<?php  
	include_once 'database.php';
	if(isset($_POST['register'])){

$username = $_POST['username'];	
$password = $_POST['password'];	
$role = $_POST['role'];
		$existingUserQuery = "SELECT * FROM users WHERE u_username = '$username';";
		$statement = $conn->prepare($existingUserQuery);
		$statement->execute();
		$countExistingUser = $statement->rowCount();
		if($countExistingUser == 0){
		$sql = "INSERT INTO users (u_role,u_username,u_password) VALUES (:role,:username,:password);";
		$stmt = $conn->prepare($sql);
		$stmt->execute([':username'=>$username,':password'=>$password,':role'=>$role]);
		$count = $stmt->rowCount();

		header("Location: index.php?register=success");
		}else{
		header("Location: register.php?UsernameIsAlreadyTaken");	
		}

	}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Student Information System</title>
</head>
<body>
<div class="container">
	<form action="" method="post">
	<div class="login">
		<div class="form-group">
			<input type="text" name="username" placeholder="Enter username" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Enter password" class="form-control">
		</div>
		<div class="form-group">
		<select name="role">
			<option>Admin</option>
			<option>User</option>
		</select>
		</div>
		<input type="submit" name="register" class="btn btn-success" value="Register">
		<a href="index.php" class="register">Already have an account?</a>
	</div>
	</form>
</div>
</body>
</html>