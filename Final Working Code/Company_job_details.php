<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        session_start();


        $ino = $_GET['id'];
        echo $ino;
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

             


              $_SESSION['ppl_req'] = $data['ppl_req'];
              
          }
    ?>
</head>
<body>
          <br><br>
          job Title: <?php echo $data['jo_tit']; ?>
          <br><br>
          location: <?php echo $data['job_loc']; ?>
          <br><br>

          job description: <?php echo $data['job_desc']; ?>
          <br><br>

          eligbility: <?php echo $data['elig']; ?>
          <br><br>

          Responsibilities: <?php echo $data['resp']; ?>
          <br><br>

          <a href="Loading_Selected_candidates.php?id=<?php echo $ino ?>"><button>View Selected Candidates</button></a>

    
</body>
</html>