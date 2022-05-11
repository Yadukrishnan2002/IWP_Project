<?php


$job_loc = $_POST['location'];

$job_title = $_POST['job_title'];

$job_desc = $_POST['job_desc'];


    $conn = new mysqli("localhost","root","","project_1");


    if($conn->connect_error)
    {

        die("connection failed");

    }

    else
    {


        $stmt = $conn->prepare("insert into testTable (jo_tit,job_desc,job_loc) values(?,?,?)");

        $stmt->bind_param("sss",$job_title,$job_desc,$job_loc);



        
        $stmt_result = $stmt->get_result();


        header("Location: Company_Home_page.php");






    }


?>