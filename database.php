<?php  
	$dsn = 'mysql:host=localhost;dbname=sis';
	$username = 'root';
	$password = '';

	try {
		$conn = new PDO($dsn,$username,$password);
	}catch(PDOException $e){
		echo 'Connection Error';
	}
?>