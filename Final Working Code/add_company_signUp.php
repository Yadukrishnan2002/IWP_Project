
<?php


$cunam = $_POST['cunam'];

$cpwd = $_POST['cpwd'];

$cnam = $_POST['cnam'];

$h_office = $_POST['head_office'];


$confirmPwd = $_POST['confirm-password'];



$conn = new mysqli("localhost","root","","project_1");


if($conn->connect_error)
{

    die("connection failed");

}

else
{
           
    $stmt = $conn->prepare("insert into company_det(cunam,cpwd,cnam,head_office) values(?,?,?,?)");

    $stmt->bind_param("ssss",$cunam,$cpwd,$cnam,$h_office);


    $stmt->execute();

        
    header("Location: Company_Home_page.php");



}

        










?>		


