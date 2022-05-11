<?php

    session_start();


   $user = $_POST['cuname'];
   $pswd =$_POST['cpwd'];

   $conn = new mysqli("localhost","root","","project_1");

   if($conn->connect_error)
   {

      die("Failed to connect to database");


   }

   else
   {

      $stmt = $conn->prepare("select * from company_det where cunam = ?");
      $stmt->bind_param("s",$user);

      $stmt->execute();

      $stmt_result = $stmt->get_result();

      if($stmt_result->num_rows > 0)
      {



            $data = $stmt_result->fetch_assoc();
            

            if($data['cpwd']===$pswd)
            {
                  $_SESSION["CompanyName"] = $data['cnan'];
                  $_SESSION["CompanyNo"] = $data['cno'];

                    // header("Location:get_comp_det.php");
                    header("Location: Company_Home_page.php");


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
