<?php
session_start();

$ppl_req = $_SESSION['ppl_req'];

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


  $stmt2 = $conn->prepare("select * from interview where ino = ? order by score desc LIMIT ? ");
  $stmt2->bind_param("ii",$ino,$ppl_req);
  $stmt2->execute();
  $stmt_result = $stmt->get_result();

  if($stmt_result->num_rows > 0)
        {
            while($data = $stmt_result->fetch_assoc())
            {
                $eno = $data['ino'];
                $stmt3 = $conn->prepare("update interview set status = 1 where ino = ? and eno = ?");
                $stmt3->bind_param("ii",$ino,$eno);
                $stmt3->execute();

            }
        }


}

?>