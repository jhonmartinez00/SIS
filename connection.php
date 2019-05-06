<?php 
	$serverName = 'localhost';
	$userName = 'root';
	$password = '';
	$dbName = 'sis';

	$dsn = 'mysql:host='.$serverName.';dbname='.$dbName;
	$conn = new PDO ($dsn,$userName,$password);
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

 ?>