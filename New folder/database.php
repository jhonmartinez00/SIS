<?php  
	$dsn = 'mysql:host=localhost;dbname=sis';
	$username = 'root';
	$password = '';

	try {
		$conn = new PDO($dsn,$username,$password);
	}catch(PDOException $e){
		echo 'Connection Error';
	}
	// $serverName = 'localhost';
	// $userName = 'root';
	// $password = '';
	// $dbName = 'sis';

	// $conn = mysqli_connect($serverName,$userName,$password,$dbName);

	// if(mysqli_connect_errno()){
	// echo 'Connection Error';
	// }else{
	// }

?>