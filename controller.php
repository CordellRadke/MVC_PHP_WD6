<?php
include('model.php');


function process_request(){


    //add records
    if (isset($_POST['save'])) {
        $studentname = $_POST['studentname'];
        $studentpercent = $_POST['studentpercent'];
        $studentlettergrade = $_POST['studentlettergrade'];
        
        $_SESSION['message'] = add_student($studentname,$studentpercent,$studentlettergrade);
        
    }  

    //delete records
	if(isset($_GET['del'])){
       
        $studentid = $_GET['del'];
	    $_SESSION['message'] = delete_student($studentid); 
		
    }
    

    //post record to be updated
    if(isset($_POST['update'])){

        $studentid = $_POST['studentid'];
        $studentname = $_POST['studentname'];
        $studentpercent = $_POST['studentpercent'];
        $studentlettergrade = $_POST['studentlettergrade'];
        $_SESSION['message'] = update_student($studentname, $studentpercent, $studentid, $studentlettergrade); 
    }

}

function get_students() {
        
    return get_student_list();

}




