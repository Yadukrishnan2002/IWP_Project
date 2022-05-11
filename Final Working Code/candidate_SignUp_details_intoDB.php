<?php

    session_start();

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];

    $full_name = $first_name." ".$last_name;

    //Creating session variable
    $_SESSION['CandUsername'] = $email;

    $password = $_POST['password'];

    $conn = new mysqli("localhost","root","","project_1");

   if($conn->connect_error)
   {

      die("Failed to connect to database");


   }

   else
   {

      $stmt = $conn->prepare("insert into employee (eunam,epwd,enam) values (?,?,?)");
      $stmt->bind_param("sss",$email,$password,$full_name);

      $stmt->execute();

      $stmt_result = $stmt->get_result();

      header("Location: candidate_Home_page.php");

   }



?>