<?php

    session_start();
    
    $db = new pdo('mysql:host=localhost;dbname=grades',
                        'root',
                        'root');
      
    function add_student($sn, $sp, $slg){
       
        global $db;
        //add records
        if(!is_numeric($sp) || empty($sn)){
            echo "<p><font color=red>ERROR! Enter a Percent Number and/or Name!
            Please and Thank You :)</font></p>";
            echo "<hr><br>";
            }else{

            function get_letter_grade($num_grade){

                if($num_grade >= 90){
                    return "A";
                }
                else if($num_grade >= 80){
                    return "B";
                }  else if($num_grade >= 70){
                    return "C";
                }  else if($num_grade >= 60){
                    return "D";
                }  else {
                    return "F";
                }

            }

            $slg = get_letter_grade($sp);
           
            $stmt = $db->prepare("INSERT INTO grades (studentname, studentpercent, studentlettergrade) VALUES (:sn, :sp, :slg)");
           

            $stmt->bindParam(':sn', $sn);
            $stmt->bindParam(':sp', $sp);
            $stmt->bindParam(':slg', $slg);
            $stmt->execute();
            
        }
   

    }

    
    function update_student($sn, $sp, $id, $slg){
        
        global $db;
        //update records
        if(!is_numeric($sp) || empty($sn)){
            echo "<h2><font color=red>ERROR! Enter a Percent Number and/or Name!
            Please and Thank You :)</font></h2>";
            echo "<hr><br>";
            }else{

            function get_letter_grade($num_grade){

                if($num_grade >= 90){
                    return "A";
                }
                else if($num_grade >= 80){
                    return "B";
                }  else if($num_grade >= 70){
                    return "C";
                }  else if($num_grade >= 60){
                    return "D";
                }  else {
                    return "F";
                }

            }

            $slg = get_letter_grade($sp);
           
            $stmt = $db->prepare("UPDATE grades SET studentname=:sn, studentpercent=:sp, studentlettergrade=:slg WHERE studentid=:id");
           

            $stmt->bindParam(':sn', $sn);
            $stmt->bindParam(':sp', $sp);
            $stmt->bindParam(':slg', $slg);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
        }





    }


    function delete_student($id){
        
        global $db;
       
        //delete records
        $stmt = $db->prepare("DELETE FROM grades WHERE studentid=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    

    }


    function get_student_list(){
        
        global $db;
        //retrieve records
        $stmt = $db->prepare("SELECT * FROM grades");
        $stmt->execute();
        $grades = $stmt->fetchAll();
        return $grades;
    }




