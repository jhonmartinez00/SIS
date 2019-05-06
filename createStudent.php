<?php  
include_once 'database.php';	
$fname = $_POST['fname'];	
$lname = $_POST['lname'];	
$bday = $_POST['bday'];
	if(isset($_POST['add'])){

		$sql = "INSERT INTO student (s_fname,s_lname,s_date) VALUES (:fname,:lname,:bday);";
		$statement = $conn -> prepare($sql);
		$statement -> execute([':fname'=>$fname,':lname'=>$lname,':bday'=>$bday]);
		header("Location: create.php?success");

}else{
		header("Location: index.php?error");
}
?>
