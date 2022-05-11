
<?php


$eunam = $_POST['eunam'];

$epwd = $_POST['epwd'];

$enam = $_POST['enam'];

$age = $_POST['age'];

$email_id = $eunam;

$address = $_POST['address'];

$collg_nam =$_POST['collg_nam'];

$degree = $_POST['degree'];

$deg_dur = $_POST['deg_dur'];

$skill_1 = $_POST['skill_1'];

$skill_2 = $_POST['skill_2'];

$skill_3 = $_POST['skill_3'];

$achv = $_POST['achv'];







$conn = new mysqli("localhost","root","","project_1");

// $PDFname = $_FILES['pdfFile']['name'];

//  if ( isset( $_FILES['pdfFile'] ) ) {
//  	if ($_FILES['pdfFile']['type'] == "application/pdf") {
//  		$source_file = $_FILES['pdfFile']['tmp_name'];
//  		$dest_file = "Resumes/".$_FILES['pdfFile']['name'];

//  		if (file_exists($dest_file)) {
//  			print "The file name already exists!!";
//  		}
//  		else {
//  			move_uploaded_file( $source_file, $dest_file )
//  			or die ("Error!!");
			
//  		}
//  	}
//  	else {
//  		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
//  			print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
//  			print "Invalid  file extension, should be pdf !!"."<br/>";
//  			print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
//  		}
//  	}
//  }



if($conn->connect_error)
{

	die("connection failed");

}

else
{

   
   $stmt = $conn->prepare("insert into employee(eunam,epwd,enam,age,email_id,address,collg_nam,degree,deg_dur,skill_1,skill_2,skill_3,achv) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");

   $stmt->bind_param("sssisssssssss",$eunam,$epwd,$enam,$age,$email_id,$address,$collg_nam,$degree,$deg_dur,$skill_1,$skill_2,$skill_3,$achv);


   $stmt->execute();


   $stmt->close();


   header("Location: candidate_Home_page.php");






}





?>