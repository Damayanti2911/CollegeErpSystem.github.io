<!DOCTYPE html>
<html>
  
<head>
    <title>News Page</title>
</head>
  
<body>
    <center>
    <?php
                $conn = mysqli_connect("localhost", "root", "", "erp_system","3308");
                    
                    // Check connection
                    if($conn === false){
                        die("ERROR: Could not connect. "
                        . mysqli_connect_error());
                    }

                    session_start();
                    $_id=$_SESSION["id"];
                    //echo $_SESSION["id"];
                    
                    $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
                    $result = mysqli_query($conn,$sql);
                    
                    while ($row = $result->fetch_assoc()) {
                        $clg_name2= $row['clg_name'];
                    }
                    //  echo "<h1>$clg_name2</h1>";

                    
                    mysqli_close($conn);

            ?>


        <?php
            $conn = mysqli_connect("localhost", "root", "", "$clg_name2","3308");
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }


            $text = $_REQUEST['news']; 
            $id= "SELECT id from college_details order by id desc LIMIT 1";

            $sql = "INSERT INTO news values ('$id','$text')";
            function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);

            exit();
        }
            if(mysqli_query($conn, $sql)){
               // echo "<h3>Insert created successfully!!!</h3>"; 
                
                            //echo nl2br("\n$id\n $clg_name\n $course\n "
                            // . "$no_of_branches\n $password\n $username \n $reenter_password");
                            Redirect('fac1.php', false);
                        } 
                    else{
                            echo "ERROR: Hush! Sorry $sql. " 
                                . mysqli_error($conn);
                        }
            mysqli_close($conn);

        ?>
    </center>
</body>
  
</html>