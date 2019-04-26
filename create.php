<?php  
	include_once 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>Create</title>
</head>
<body>
<div class="container">
	<h1 class="title">Student Information System</h1>
	<div class="container1">
	<a href="create.php"><button class="btn btn-success">Create</button></a>
	<a href="read.php"><button class="btn btn-primary">Read</button></a>
	<a href="update.php"><button class="btn btn-secondary">Update</button></a>
	<a href="delete.php"><button class="btn btn-danger">Delete</button></a>
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