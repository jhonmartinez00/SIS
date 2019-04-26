<?php  
	include_once 'database.php';
	$sql = "SELECT * FROM student;";
	$statement = $conn->prepare($sql);
	$statement->execute();
	$data = $statement->fetchAll(PDO::FETCH_OBJ);
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
	<h1>View Students</h1>
	<br>
	<div class="card mt-5">
		<div class="card-header">
			<h2>List of Students</h2>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Birthdate</th>
					</tr>
					<?php
						foreach($data as $student):
					?>
					<tr>
						<td><?= $student->s_id; ?></td>
						<td><?= $student->s_fname; ?></td>
						<td><?= $student->s_lname; ?></td>
						<td><?= $student->s_date; ?></td>
					</tr>
					<?php
						endforeach;
					?>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>