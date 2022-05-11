<?php

    session_start();
    $ino = $_SESSION['ino'];



    $conn = new mysqli("localhost","root","","project_1");   
    
  

   

    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {
     
        $stmt = $conn->prepare("select * from job_post where ino = ?");
        $stmt->bind_param("i",$ino);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $data = $stmt_result->fetch_assoc();
        
        $Jobdesc = $data['job_desc'];

        $_SESSION['JobDesc'] = $data['job_desc']; 

        $_SESSION['eno'] = $eno;

        $_SESSION['job_desc_file'] = $data['job_desc_file'];
        
        header("Location: ResumeMatching2.php");
        
        
         
        

    }

?>