<?php  
	include_once 'database.php';
	$id = $_GET['id'];
	$deleteQuery = "DELETE FROM student WHERE s_id = $id;";
	$deleteStatement = $conn->prepare($deleteQuery);
	$deleteStatement->execute([':id'=>$id]);
	header("Location: delete.php?delete=success");
?>