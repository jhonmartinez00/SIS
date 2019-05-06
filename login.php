<?php 
session_start();
include_once 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
	if(isset($_POST['login'])){
		$stmt = $conn->prepare('SELECT * FROM users WHERE u_username = ? && u_password = ?');
		$stmt->execute([$username,$password]);
		$userCount = $stmt->rowCount();
		$user = $stmt->fetch();
		if($userCount > 0){
			//header('Location: home.php?login=success');
			$_SESSION['u_id'] = $user->u_id;
			$_SESSION['u_role'] = $user->u_role;
			header('Location: home.php?login=success');
		}else{
			header('Location: index.php?login=failed');
		}

	}else{
		header('Location: index.php');
	}
?>