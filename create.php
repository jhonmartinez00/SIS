<?php  
	include_once 'database.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>Student Information System</title>
</head>
<body>
<div class="container">
	<h1 class="title">Student Information System</h1>
	<div class="container1">
	<?php 
		if($_SESSION['u_role']=='Admin'){
		echo '<a href="create.php"><button class="btn btn-success">Create</button></a>';
		echo '<a href="read.php"><button class="btn btn-primary">Read</button></a>';
		echo '<a href="update.php"><button class="btn btn-secondary">Update</button></a>';
		echo '<a href="delete.php"><button class="btn btn-danger">Delete</button></a>';
	}else{
		header("Location: read.php");
	}	?>
	</div>
	<br>
	<h1>Create New Student</h1>
	<br>
	<form action="createStudent.php" method="POST"  enctype="multipart/form-data">
	<div class="form-group">
		<input  class="form-control" type="text" name="fname" placeholder="Enter First Name">
	</div>
	<div class="form-group">
		<input class="form-control"  type="text" name="lname" placeholder="Enter Last Name">
	</div>
	<div class="form-group">
		<input class="form-control" type="date" name="bday">
	</div>
	<input class="btn btn-success" id="createBtn" type="submit" name="add" value="Create">
	</form>
</div>
</body>
</html>