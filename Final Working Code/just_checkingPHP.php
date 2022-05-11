<?php

    $name = $_POST['name'];
    $age = $_POST['age'];
    //$email = $_POST['email'];
    $conn = new mysqli("localhost","root","","test");

   if($conn->connect_error)
   {

      die("Failed to connect to database");


   }

   else
   {

      $stmt = $conn->prepare("insert into details (name,age) values (?,?)");
      $stmt->bind_param("si",$name,$age);

      $stmt->execute();

      $stmt_result = $stmt->get_result();
    
   }
?>