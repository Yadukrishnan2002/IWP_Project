<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    

    
    $username = $_SESSION['CandUsername'];
    $Jobdescription = $_SESSION['JobDesc'];
    $jobdescFileName = $_SESSION['job_desc_file'];


    include 'vendor/autoload.php';


    $conn = new mysqli("localhost","root","","project_1");   
    
  

   

    if($conn->connect_error) {
        die("Connection failed"); 
    }
    else
    {
     
        $stmt = $conn->prepare("select * from employee where eunam = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $data = $stmt_result->fetch_assoc();
        
        $ResumeName = $data['resume_name'];
        

        // header("Location: add_candidateData_to_interview_2.php");
        
        
         
        

    }

    include 'vendor/autoload.php';

    $parser = new \Smalot\PdfParser\Parser();


    $JobDesc = $Jobdescription;
    

    //Here we are taking job description from the pdf of job description that the company uploaded.

    $file = 'Resumes/'.$ResumeName;

    $jobdescFile = 'Resumes/'.$jobdescFileName;

    $pdf = $parser->parseFile($file);
    $jobdescpdf = $parser->parseFile($jobdescFile);
    
    $text = $pdf->getText();
    $textjobdesc = $jobdescpdf->getText();

    $pdfText = nl2br($text);
    $jobdescText = nl2br($textjobdesc);



    ?>

    <script>
            var Jobdesc = <?php echo(json_encode($jobdescText)); ?>;
            var PDFText = <?php echo(json_encode($pdfText)); ?>;

         

            function wordCountMap(str){
                let words = str.split(' ');
                let wordCount = {};
                words.forEach((w)=>{
                    wordCount[w] = (wordCount[w] || 0) +1;

                });
            return wordCount;
            }

            function addWordsToDictionary(wordCountmap, dict){
                for(let key in wordCountmap){
                    dict[key] = true;
                }
            }


            function wordMapToVector(map,dict){
                let wordCountVector = [];
                for (let term in dict){
                    wordCountVector.push(map[term] || 0);
                }
                return wordCountVector;
            }


            function dotProduct(vecA, vecB){
                let product = 0;
                for(let i=0;i<vecA.length;i++){
                    product += vecA[i] * vecB[i];
                }
                return product;
            }

            function magnitude(vec){
                let sum = 0;
                for (let i = 0;i<vec.length;i++){
                    sum += vec[i] * vec[i];
                }
                return Math.sqrt(sum);
            }

            function cosineSimilarity(vecA,vecB){
                return dotProduct(vecA,vecB)/ (magnitude(vecA) * magnitude(vecB));
            }


            function textCosineSimilarity(txtA,txtB){
                const wordCountA = wordCountMap(txtA);
                const wordCountB = wordCountMap(txtB);
                let dict = {};
                addWordsToDictionary(wordCountA,dict);
                addWordsToDictionary(wordCountB,dict);
                const vectorA = wordMapToVector(wordCountA,dict);
                const vectorB = wordMapToVector(wordCountB,dict);
                return cosineSimilarity(vectorA, vectorB);
            }

            function addTofile(scorePerc)
            {
                const fs = require('fs')
  
                // Data which will write in a file.
                let data = scorePerc.toString();

                // Write data in 'Output.txt' .
                fs.writeFile('AllScores.txt', data, (err) => {

                // In case of a error throw err.
                if (err) throw err;
                })
            }


            var score = textCosineSimilarity(Jobdesc,PDFText);
            var scorePerc = score * 100000;
            var scorePercStr = scorePerc.toString();
            console.log(score*100," %");
            
            
            sessionStorage.setItem("ScoreValue", scorePerc);
 

            const xhr = new XMLHttpRequest();

            xhr.onload = function()
        {
            const ServerResponse = document.getElementById("disp");
            ServerResponse.innerHTML = this.responseText;



        }



            xhr.open("POST","add_score_to_DB.php");
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");


            const jsonString = JSON.stringify(scorePerc);
        


            xhr.send(jsonString);

            console.log(jsonString);



            
            //window.location.href="add_score_to_DB.php";

           // addTofile(scorePerc);

            

            
    </script>

   

</head>
<body>

    <p id = "disp"></p>

    
</body>
</html>