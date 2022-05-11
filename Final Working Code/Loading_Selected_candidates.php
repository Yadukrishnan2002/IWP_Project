<?php
    session_start();

    $ino = $_GET['id'];
    $status = 1;
    $conn = new mysqli("localhost","root","","project_1");  
    
    $enoArray = array();

    $ppl_req = $_SESSION['ppl_req'];
     
    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {

       

        $stmt = $conn->prepare("select eno from interview where ino = ? and status = 1");
        $stmt->bind_param("i",$ino);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows > 0)
        {
            while($data = $stmt_result->fetch_assoc())
            {
                $enoArray[] = $data;
                
            }
        }
        
        $_SESSION['enoArray'] = $enoArray;
        
        //print_r($enoArray);

        header("Location: Selected_candidates_list.php?eno=");
        
    }


?>