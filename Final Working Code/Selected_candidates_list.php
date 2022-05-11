<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Selected Candidates</title>
        <link rel="stylesheet" href="Style6(Selected_candidates_list).css">

        <?php

            session_start();

            $enoArray = $_SESSION['enoArray'];
            $ppl_req = $_SESSION['ppl_req'];

            //$enoArray = $_REQUEST['eno'];
            //print_r($enoArray) ;
            $conn = new mysqli("localhost","root","","project_1");   
                


                

            if($conn->connect_error) {
                die("Connection failed"); 
            }
            else
            {
                
                
                
            


        ?>
        
    </head>

    <body>
        <div class="list">
            <h2><span class = "candidate-name-title">Candidate Name</span>   <span class = "email-title">Email</span>  <span class = "phone-no-title">phone no</span></h2>
            <ul>
                <pre>
                    <?php
                        foreach($enoArray as $key=>$value)
                        {
                            //echo $value['eno'];
                            $stmt = $conn->prepare("select * from employee where eno = ?");
                            $stmt->bind_param("i",$value['eno']);
                            $stmt->execute();
                            $stmt_result = $stmt->get_result();
                            $data = $stmt_result->fetch_assoc()
                            
                            
                    ?>
                    
                    <li><span class = "candidate-name"><?php echo $data['enam']; ?></span>      <span class = "email"> <?php echo $data['email_id']; ?> </span>     <span class = "phno"><?php echo $data['phno'];?></span>  <span class = "view-profile-button"> <a href="show_profile_selected.php?eno=<?php echo $value['eno'] ?>"><Button>View Profile</Button></a></span></li>

                    <?php

                                
                            }
                        }
                    ?>
                                                                                                                                   
                </pre>
            </ul>
            
            
            
        </div>

    </body>
</html>