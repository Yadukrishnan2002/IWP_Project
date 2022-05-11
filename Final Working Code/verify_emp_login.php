
<?php

   
   session_start();

   $_SESSION["CandUsername"] = $_POST['eunam'];
   
   $user = $_POST['eunam'];
   $pswd =$_POST['epwd'];

   $conn = new mysqli("localhost","root","","project_1");

   if($conn->connect_error)
   {

      die("Failed to connect to database");


   }

   else
   {

      $stmt = $conn->prepare("select * from employee where eunam = ?");
      $stmt->bind_param("s",$user);

      $stmt->execute();

      $stmt_result = $stmt->get_result();

      if($stmt_result->num_rows > 0)
      {



         $data = $stmt_result->fetch_assoc();
         $_SESSION['eno'] = $data['eno'];

         if($data['epwd']===$pswd)
         {

            header("Location: candidate_Home_page.php");


         }
         else
         {


            echo '<script>alert("Invalid Username or Password")</script>';
            
  
         }





      } 
      
      else
      {

         
         echo '<script>alert("Invalid Username or Password")</script>';


      }



   }





?>	

