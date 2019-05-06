<?php  
	include_once 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
	if(isset($_POST['register'])){
		$stmt = $conn->prepare('SELECT * FROM users WHERE u_username = ?');
		$stmt->execute([$username]);
		$userCount = $stmt->rowCount();
		$user = $stmt->fetch();
		if($userCount < 1){

		$stmt1 = $conn->prepare('INSERT INTO users (u_role,u_username,u_password) VALUES (:role,:username,:password)');
		$stmt1->execute([$username,$password]);
		$stmt1->execute([':role'=>$role,':username'=>$username,':password'=>$password]);
		header('Location: index.php?registrationSuccess');
		}else{
			header('Location: register.php?usernameIsAlreadyTaken');
		}

	}else{
		header('Location: index.php');
	}
?>