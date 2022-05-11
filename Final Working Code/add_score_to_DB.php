

<?php
    session_start();

    $eno = $_SESSION['eno'];
    $ino = $_SESSION['ino'];


    $eno = 3;


    $status = 0;
    $requestPayload = file_get_contents("php://input");
    $object = json_decode($requestPayload,true);

    echo $object;


    

    $conn = new mysqli("localhost","root","","project_1");    
    
  

   

     if($conn->connect_error) {
           die("Connection failed"); 
    }
       else
    {
     
        $stmt = $conn->prepare("insert into interview (ino,eno,score,status) values(?,?,?,?)");
        $stmt->bind_param("iiii",$ino,$eno,$object,$status);
        $stmt->execute();
         
        
           header("Location: candidate_Home_page.php");
        
        
         
        

    }


?>