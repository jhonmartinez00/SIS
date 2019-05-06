<?php  

	include 'home.php';
	$sql = "SELECT * FROM student;";
	$statement = $conn->prepare($sql);
	$statement->execute();
	$data = $statement->fetchAll(PDO::FETCH_OBJ);

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
	<h1>Delete Student Records</h1>
	<br>
	<div class="card mt-5">
		<div class="card-header">
			<h2>List of Students</h2>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>Action</th>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Birthdate</th>
					</tr>
					<?php
						foreach($data as $student):
					?>
					<tr>
						<td><a onclick="return confirm('Delete this student?')" href="deleteStudent.php?id=<?= $student->s_id; ?>"><input type="submit" name="del" class="btn btn-danger" value="DELETE"></a></td>
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