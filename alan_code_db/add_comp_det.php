<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>20BAI1226</title>
</head>
<body>

<?php


$cnam = $_POST['cnam'];

$job_loc = $_POST['job_loc'];

$job_title = $_POST['job_title'];

$ppl_req =$_POST['ppl_req'];

$start_sal = $_POST['start_sal'];

$end_sal = $_POST['end_sal'];

$job_desc = $_POST['job_desc'];




$conn = new mysqli("localhost:3307","root","","project_1");


if($conn->connect_error)
{

	die("connection failed");

}

else
{

   
   $stmt = $conn->prepare("insert into job_post(cnam,job_loc,jo_tit,ppl_req,salary_start,salary_end,job_desc) values(?,?,?,?,?,?,?)");

   $stmt->bind_param("sssiiis",$cnam,$job_loc,$job_title,$ppl_req,$start_sal,$end_sal,$job_desc);


   $stmt->execute();


   $stmt->close();


   #header("Location:placement.html");






}





?>		

</body>
</html>
