<?php 

    include('controller.php');
    //variables for page - loaded in process_request
    $studentid=0; $studentname=""; $studentpercent=""; $studentlettergrade="";
    
    //use model and controllers
    process_request();
    //gets the model function that retrieves all students in database
    $grades = get_students();
    //this will add the values in from a selected student
    if (isset($_GET['edit'])) {
       
		$studentid = $_GET['edit'];
        $edit_state = true;
        $record = $db->prepare("SELECT * FROM grades WHERE studentid=:studentid");
        $record->bindParam(':studentid', $studentid);
        $record->execute();
        //we must keep track of selected student
		if (count($record) == 1 ) {
			$n = $record->fetch();
			$studentname = $n['studentname'];
            $studentpercent = $n['studentpercent'];
            
		}
	}

?>
<!DOCTYPE html>
<html>
<head>

    <title>Student Grade Calculator</title>
    <link rel="stylesheet" href="assets/css/style.css" >

</head>

<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<div class="background">
<div class="header">
<h2>STUDENT GRADES REPORT <br><div class="slogan">A Simple App for Teachers<div></h2>
</div>

<h3>Input your student's name & final grade percentage (%):</h3>

<form method="post" action="index.php">
<input type="hidden" name="studentid" value="<?php echo $studentid;?>">
        <div class="input-group">
            <input type="text" name="studentname" placeholder="Student Name" value="<?php echo $studentname;?>"/>
        </div>
        <div class="input-group">
            <input type="text" name="studentpercent" placeholder="Student Percent" value="<?php echo $studentpercent;?>"/>
        </div>
        <div class="input-group">
        <?php if ($edit_state == false): ?>
            <button type="submit" name="save" class="btn">Save</button>
        <?php else: ?>
            <button type="submit" name="update" class="btn">Update</button>
        <?php endif ?>
        </div>
        <div class="input-group">
            <button type="reset" class="reset-btn">Reset</button>
        </div>
</form>
    <table>
    
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Student Percentage</th>
                <th>Letter Grade</th> 
                <th colspan="2">Action</th>
               
            </tr>
        </thead>
      
        
            <?php foreach($grades as $row){  ?>
               
                    <tr>
                        <td><?php echo $row['studentid'];?></td>
                        <td><?php echo $row['studentname'];?></td>
                        <td><?php echo $row['studentpercent'];?></td>
                        <td><?php echo $row['studentlettergrade'];?></td>
                        <td>
                            <a class="edit_btn" href="index.php?edit=<?php echo $row['studentid']; ?>" >Edit</a>
                        </td>
                        <td>
                            <a class="del_btn" href="index.php?del=<?php echo $row['studentid']; ?>" >Delete</a>
                        </td>
                    </tr>
                
                <?php } ?>
       
    </table>
            </div> 
</body>