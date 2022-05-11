
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel = "stylesheet" type= "text/css" href = "style4 (Company_Home_page).css">


    <?php

    $conn = new mysqli("localhost","root","","test");   
    


    

    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {
     
        $stmt = $conn->prepare("select * from job_card order by jid desc");
        // $stmt->bind_param("i",$jidno);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        
    }
    ?>
        
        
        
        
    


    


</head>
<body>

    <?php
        while($data = $stmt_result->fetch_assoc())
        {
    ?>
    <div class="job-card">
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "job-title-label">
                        Job title: 
                    </span>
                    <span class = "job-title">
                        <?php echo $data['job_title']; ?>
                    

                    </span>

                </span>
                

                <span class = "single-column1">
                    <span class = "Date-label">
                        Post created on:

                    </span>
                    <span class = "Date">
                        15-4-22
                        <br>
                        <br>
                        <br>

                    </span>

                </span>
                

            </div>
            
            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "location-label">
                        Location: 

                    </span>
                    <span class = "location">
                        Mountain View, CA

                    </span>
                </span>

                <span class = "single-column1">
                    <span class = "pay-scale-label">
                        Pay scale:
                    </span>
                    <span class = "pay-scale">
                        100k-140k $
                        <br>
                        <br>
                        
                    </span>
                </span>
            </div>

            

            <div class="single-row1">
                <span class = "single-column1">
                    <span class = "no-of-applicants-label">
                        No of applicants:

                    </span>
                    <span class = "no-of-applicants">
                        8.1 K
                    </span>
                </span>

                <span class = "single-column1">
                    <span class = "btn">
                        <button><p class = "btn-label">View details</p></button>
                    </span>
                </span>
            </div>
            
            
    </div>

    <?php
        }
    ?>

    
</body>
</html>


