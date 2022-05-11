<?php

    $conn = new mysqli("localhost","root","","project_1");   
                
    $cno = 1;

                

    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {
        
        $stmt = $conn->prepare("update company_det set no_foll = no_foll + 1 where cno = ?");
        $stmt->bind_param("i",$cno);
        $stmt->execute();
        

       
        header("Location: candidate_Home_page.php");
        

        

       
        

        
            
    }   

?>