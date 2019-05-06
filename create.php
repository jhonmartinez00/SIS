<?php  
	include 'home.php';
				if($_SESSION['role']=='Admin'){
				echo '
	<a href="create.php"><button class="btn btn-success">Create</button></a>
	<a href="read.php"><button class="btn btn-primary">Read</button></a>
	<a href="update.php"><button class="btn btn-secondary">Update</button></a>
	<a href="delete.php"><button class="btn btn-danger">Delete</button></a>';
			}else{
				header("Location: read.php");
			}
?>
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