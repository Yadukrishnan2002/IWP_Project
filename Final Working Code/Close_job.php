<?php

    session_start();
    //$ppl_req = $_SESSION['ppl_req'];
    //$ppl_req = 2;
    $ino = $_GET['ino'];

    $conn = new mysqli("localhost","root","","project_1");

   if($conn->connect_error)
   {

      die("Failed to connect to database");


   }

   else
   {

      $stmt = $conn->prepare("update job_post set job_open_status = 0 where ino = ?");
      $stmt->bind_param("i",$ino);

      $stmt->execute();

      $stmt_result = $stmt->get_result();


      $stmt5 = $conn->prepare("select * from job_post where ino = ?");
      $stmt5->bind_param("i",$ino);

      $stmt5->execute();

      $stmt_result = $stmt5->get_result();

      $data = $stmt_result->fetch_assoc();
      $ppl_req = $data['ppl_req'];



    

      $stmt2 = $conn->prepare("select * from interview where ino = ? order by score desc");
      $stmt2->bind_param("i",$ino);
      $stmt2->execute();
      $stmt_result = $stmt2->get_result();

      $i = 0;

      if($stmt_result->num_rows > 0)
        {
            while($data = $stmt_result->fetch_assoc())
            {
                // $enoArray[] = $data;

                $enoNum = $data['eno'];
                
                if($i<$ppl_req)
                {
                    $stmt3 = $conn->prepare("update interview set status = 1 where ino = ? and eno = ?");
                    $stmt3->bind_param("ii",$ino,$enoNum);
                    $stmt3->execute();

                }
                else
                {
                    $stmt4 = $conn->prepare("update interview set status = -1 where ino = ? and eno = ?");
                    $stmt4->bind_param("ii",$ino,$enoNum);
                    $stmt4->execute();
                }

                $i = $i + 1;


                
            }
        }


      header("Location: Company_Home_page.php");
    
   }


?>