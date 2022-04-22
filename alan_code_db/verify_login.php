
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verify Login Page</title>
</head>
<body>

<?php

   
   $user = $_POST['cunam'];
   $pswd =$_POST['cpwd'];

   $conn = new mysqli("localhost:3307","root","","project_1");

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

      		header("Location:get_comp_det.php");


      }
      else
      {


      	echo "<h3>Invalid Username or Password</h3>";
      }





      } else
      {

         
       echo "<h3>Invalid Username or Password</h3>";


      }



   }





?>	


</body>
</html>