<?php 
	include_once 'database.php';
	session_start();
	if(isset($_POST['login'])){

	$username = $_POST['username'];	
	$password = $_POST['password'];	
		$sql = "SELECT * FROM users WHERE u_username = '$username' && u_password = '$password';";
		$statement = $conn->prepare($sql);
		$statement->execute([':username'=>$username,':password'=>$password]);
		$data = $statement->fetchAll(PDO::FETCH_OBJ);
		$count = $statement->rowCount();
		foreach ($data as $user) {
		}
		if($count > 0){
			header("Location: read.php?login=success");
			$_SESSION['id'] = $user->u_id;
			$_SESSION['role'] = $user->u_role;
		}else{
			header("Location: index.php?login=failed");
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
		<input type="submit" name="login" class="btn btn-success" value="Login">
		<a href="register.php" class="register">Create New Account?</a>
	</div>
	</form>
</div>
</body>
</html>