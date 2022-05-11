

<?php


    session_start();
    $cname = $_SESSION["CompanyName"];
    $cno = $_SESSION["CompanyNo"];
    echo $cname;
    echo $cno;

    // $cnam = $_POST['cname'];
    // $cno = $_POST['cno'];

    $ppl_app = 10;
    $elig = $_POST['elig'];
    $resp = $_POST['resp'];

    $job_loc = $_POST['job_loc'];

    $job_title = $_POST['job_title'];

    $ppl_req = $_POST['ppl_req'];

    $start_sal = $_POST['start_sal'];

    $end_sal = $_POST['end_sal'];

    $job_desc = $_POST['job_desc'];




    if ( isset( $_FILES['pdfFile'] ) ) {
        if ($_FILES['pdfFile']['type'] == "application/pdf") {
            
            $source_file = $_FILES['pdfFile']['tmp_name'];
            $dest_file = "Resumes/".$_FILES['pdfFile']['name'];
    
            if (file_exists($dest_file)) {
                print "The file name already exists!!";
            }
            else {
                move_uploaded_file( $source_file, $dest_file )
                or die ("Error!!");
                // if($_FILES['pdfFile']['error'] == 0) {
                //     print "Pdf file uploaded successfully!";
                //     print "<b><u>Details : </u></b><br/>";
                //     print "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
                //     print "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
                //     print "File location : upload/".$_FILES['pdfFile']['name']."<br/>";
                // }
            }
        }
        else {
            if ( $_FILES['pdfFile']['type'] != "application/pdf") {
                print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
                print "Invalid  file extension, should be pdf !!"."<br/>";
                print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
            }
        }
    }
    


    $FileName = $_FILES['pdfFile']['name'];


    $conn = new mysqli("localhost","root","","project_1");


    if($conn->connect_error)
    {

        die("connection failed");

    }

    else
    {


        $stmt = $conn->prepare("insert into job_post (cno,cnam,job_loc,jo_tit,ppl_app,ppl_req,salary_start,salary_end,job_desc,elig,resp,job_desc_file) values(?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("isssiiiissss",$cno,$cname,$job_loc,$job_title,$ppl_app,$ppl_req,$start_sal,$end_sal,$job_desc,$elig,$resp,$FileName);


        $stmt->execute();


        $stmt_result = $stmt->get_result();


        header("Location: Company_Home_page.php");






    }





?>		