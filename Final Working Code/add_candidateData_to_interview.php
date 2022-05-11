<?php
session_start();
?>
<?php


    
    $ino = $_SESSION['ino'];

    $username = $_SESSION['CandUsername'];


    $conn = new mysqli("localhost","root","","project_1");   
    
  

   

    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {
     
        $stmt = $conn->prepare("select * from employee where eunam = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $data = $stmt_result->fetch_assoc();
        
        $eno = $data['eno'];

        $_SESSION['eno'] = $eno;
        
        header("Location: ResumeMatching.php");
        
        
         
        

    }

?>