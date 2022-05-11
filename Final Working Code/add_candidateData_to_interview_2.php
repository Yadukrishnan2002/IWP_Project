<?php
session_start();
?>

<?php

    $ino = $_SESSION['ino'];
    $eno = $_SESSION['eno'];
    
    $conn = new mysqli("localhost","root","","project_1");   
    
  

   

    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {
        // $stmt = $conn->prepare("insert into interview (ino,eno,score,status) values(?,?,?,?)");
        // $stmt->bind_param("iiii",$ino,$eno,$score,$status);
        // $stmt->execute();
        
        
        header("Location: ResumeMatching.php");
    }

?>