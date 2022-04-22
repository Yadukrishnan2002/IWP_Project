<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Employee Details </title>
</head>
<body>

<?php


$eunam = $_POST['eunam'];

$epwd = $_POST['epwd'];

$enam = $_POST['enam'];

$age = $_POST['age'];

$email_id = $_POST['email_id'];

$address = $_POST['address'];

$collg_nam =$_POST['collg_nam'];

$degree = $_POST['degree'];

$deg_dur = $_POST['deg_dur'];

$skill_1 = $_POST['skill_1'];

$skill_2 = $_POST['skill_2'];

$skill_3 = $_POST['skill_3'];

$achv = $_POST['achv'];







$conn = new mysqli("localhost:3307","root","","project_1");


if($conn->connect_error)
{

	die("connection failed");

}

else
{

   
   $stmt = $conn->prepare("insert into employee(eunam,epwd,enam,age,email_id,address,collg_nam,degree,deg_dur,skill_1,skill_2,skill_3,achv) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");

   $stmt->bind_param("sssiiis",$eunam,$epwd,$enam,$age,$email_id,$address,$collg_nam,$degree,$deg_dur,$skill_1,$skill_2,$skill_3,$achv);


   $stmt->execute();


   $stmt->close();


   #header("Location:placement.html");






}





?>			

</body>
</html>