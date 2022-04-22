<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add SignUp Details</title>
</head>
<body>

<?php


$cunam = $_POST['cunam'];

$cpwd = $_POST['cpwd'];

$cnam = $_POST['cnam'];

$h_office = $_POST['head_office'];





$conn = new mysqli("localhost:3307","root","","project_1");


if($conn->connect_error)
{

	die("connection failed");

}

else
{

   
   $stmt = $conn->prepare("insert into company_det(cunam,cpwd,cnam,head_office) values(?,?,?,?)");

   $stmt->bind_param("ssss",$cunam,$cpwd,$cnam,$h_office);


   $stmt->execute();


   $stmt->close();


   






}





?>		


</body>
</html>