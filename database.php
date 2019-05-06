<?php  
	$dsn = 'mysql:host=db4free.net;dbname=samplesis123';
	$username = 'hamsaburou123';
	$password = 'qwerty123';

	try {
		$conn = new PDO($dsn,$username,$password);
	}catch(PDOException $e){
		echo 'Connection Errors';
	}

?>