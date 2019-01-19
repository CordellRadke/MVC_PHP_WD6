<?php 

///**************   EXAMPLE USING MYSQLI RATHER THAN PDO    ***************/
	
// session_start();
	// $db = mysqli_connect('localhost', 'root', 'root', 'grades');

	// // initialize variables
	// $studentname = "";
	// $studentpercent = "";
	// $studentid = 0;
	// $edit_state = false;

	// if (isset($_POST['save'])) {
	// 	$studentname = $_POST['studentname'];
	// 	$studentpercent = $_POST['studentpercent'];

	// 	mysqli_query($db, "INSERT INTO grades (studentname, studentpercent) VALUES ('$studentname', '$studentpercent')"); 
	// 	$_SESSION['message'] = "Student saved"; 
	// 	header('location: index.php');
	// }
	
	// //update records
	// if(isset($_POST['update'])){
	// 	$studentid = mysqli_real_escape_string($db, $_POST['studentid']);
	// 	$studentname = mysqli_real_escape_string($db, $_POST['studentname']);
	// 	$studentpercent = mysqli_real_escape_string($db, $_POST['studentpercent']);
	// 	mysqli_query($db, "UPDATE grades SET studentname='$studentname', studentpercent='$studentpercent' WHERE studentid=$studentid");	
		
	// 	$_SESSION['message'] = "Student updated"; 
	// 	header('location: index.php');
	// }

	// //delete records
	// if(isset($_GET['del'])){
	// 	$id = $_GET['del'];
	// 	mysqli_query($db, "DELETE FROM grades WHERE studentid=$studentid");
	// 	$_SESSION['message'] = "Student deleted"; 
	// 	header('location: index.php');
	// }


	// //retrieve records
	// $results = mysqli_query($db, "SELECT * FROM grades");
?>
