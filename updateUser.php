<?php  
	include_once 'database.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM student WHERE s_id = $id;";
	$statement = $conn->prepare($sql);
	$statement->execute();
	$data = $statement->fetchAll(PDO::FETCH_OBJ);
	

	if(isset($_POST['update'])){
			$fname = $_POST['fname'];	
	$lname = $_POST['lname'];	
	$bday = $_POST['bday'];
		$updateQuery = "UPDATE student SET s_fname=:fname,s_lname=:lname,s_date=:bday WHERE s_id = $id;";
	$updateStatement = $conn->prepare($updateQuery);
	$updateStatement->execute([':fname'=>$fname,':lname'=>$lname,':bday'=>$bday]);
	header("Location: read.php?edit=success");
	}
foreach($data as $student):
endforeach;
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
	<h1>Update Student Record</h1>
	<br>
	<form action="" method="POST"  enctype="multipart/form-data">
	<div class="form-group">
		<input  class="form-control" type="text" name="fname" value="<?= $student->s_fname; ?>">
	</div>
	<div class="form-group">
		<input class="form-control"  type="text" name="lname" value="<?= $student->s_lname; ?>">
	</div>
	<div class="form-group">
		<input class="form-control" type="date" name="bday" value="<?= $student->s_date; ?>">
	</div>
	<input class="btn btn-success" id="createBtn" type="submit" name="update" value="Update">
	</form>
</div>
</body>
</html>