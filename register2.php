<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "erp_system","3308");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
            . mysqli_connect_error());
        }
        function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);

            exit();
        }
          
        // Taking all 5 values from the form data(input)
        $clg_name =  $_REQUEST['clg_name'];
        $course = $_REQUEST['course'];
        $no_of_branches =  $_REQUEST['no_of_branches'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $reenter_password = $_REQUEST['reenter_password'];
        $id= "SELECT id from college_details order by id desc LIMIT 1";
          
        // Performing insert query execution
        // here our table name is college
        if($password == $reenter_password)
        {
            $sql = "INSERT INTO college_details  VALUES ('$id','$clg_name','$course','$no_of_branches','$username','$password','$reenter_password')";
            //$sql = "CREATE DATABASE $clg_name";        


            if(mysqli_query($conn, $sql)){
                //echo "<h3>data stored in a database successfully." 
                //    . " Please browse your localhost php my admin" 
                //    . " to view the updated data</h3>"; 
      
                //echo nl2br("\n$id\n $clg_name\n $course\n "
                //    . "$no_of_branches\n $password\n $username \n $reenter_password");
                //Redirect('login.php', false);
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
        }
        else{
            echo"<h3>Password not matched</h3>";
        } 
        
          
        // Close connection
        mysqli_close($conn);
        ?>
        <?php
            require_once "session.php";
            $conn = mysqli_connect("localhost", "root", "", "erp_system","3308");
          
            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }
            $clg_name =  $_REQUEST['clg_name'];
            $password = $_REQUEST['password'];
            $reenter_password = $_REQUEST['reenter_password'];

            if($password == $reenter_password)
            {
                 //$sql = "INSERT INTO college_details  VALUES ('$id','$clg_name','$course','$no_of_branches','$username','$password','$reenter_password')";
                $sql = "CREATE DATABASE $clg_name";        


            if(mysqli_query($conn, $sql)){
                echo "<h3>Database created successfully!!!</h3>"; 
      
                //echo nl2br("\n$id\n $clg_name\n $course\n "
                   // . "$no_of_branches\n $password\n $username \n $reenter_password");
                //Redirect('login.php', false);
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            }
            else{
                echo"<h3>Password not matched</h3>";
            } 
        
          
        // Close connection
       // mysqli_close($conn);


        ?>
        <?php
            require_once "session.php";
            
            $clg_name =  $_REQUEST['clg_name'];
            $password = $_REQUEST['password'];
            $reenter_password = $_REQUEST['reenter_password'];
            $conn = mysqli_connect("localhost", "root", "", "$clg_name","3308");
          
            
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }

            if($password == $reenter_password)
            {
                //$sql = "INSERT INTO college_details  VALUES ('$id','$clg_name','$course','$no_of_branches','$username','$password','$reenter_password')";
                //$sql = "CREATE DATABASE $clg_name";        
                $sql = "CREATE TABLE stu_info (
                    stu_id INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    pass VARCHAR(200) NOT NULL,
                    name VARCHAR(200) NOT NULL,
                    branch VARCHAR(200),
                    class VARCHAR(200),
                    prn INT(200))";


            if(mysqli_query($conn, $sql)){
                echo "<h3>Table created successfully!!!</h3>"; 
      
                //echo nl2br("\n$id\n $clg_name\n $course\n "
                   // . "$no_of_branches\n $password\n $username \n $reenter_password");
                //Redirect('login.php', false);
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            }
            else{
                echo"<h3>Password not matched</h3>";
            } 
        
          
        // Close connection
        mysqli_close($conn);


        ?>
        <?php
            require_once "session.php";
            
            $clg_name =  $_REQUEST['clg_name'];
            $password = $_REQUEST['password'];
            $reenter_password = $_REQUEST['reenter_password'];
            $conn = mysqli_connect("localhost", "root", "", "$clg_name","3308");
          
            
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }

            if($password == $reenter_password)
            {
                //$sql = "INSERT INTO college_details  VALUES ('$id','$clg_name','$course','$no_of_branches','$username','$password','$reenter_password')";
                //$sql = "CREATE DATABASE $clg_name";        
                $sql = "CREATE TABLE faculty_info (
                    fac_id INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    pass VARCHAR(200) NOT NULL,
                    name VARCHAR(200) NOT NULL,
                    branch VARCHAR(200),
                    class VARCHAR(200),
                    suject VARCHAR(200)
                    )";


            if(mysqli_query($conn, $sql)){
                echo "<h3>Table created successfully!!!</h3>"; 
      
                //echo nl2br("\n$id\n $clg_name\n $course\n "
                   // . "$no_of_branches\n $password\n $username \n $reenter_password");
                //Redirect('login.php', false);
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            }
            else{
                echo"<h3>Password not matched</h3>";
            } 
        
          
        // Close connection
        mysqli_close($conn);


        ?>
        <?php
            require_once "session.php";
            
            $clg_name =  $_REQUEST['clg_name'];
            $password = $_REQUEST['password'];
            $reenter_password = $_REQUEST['reenter_password'];
            $conn = mysqli_connect("localhost", "root", "", "$clg_name","3308");
          
            
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }

            if($password == $reenter_password)
            {
                //$sql = "INSERT INTO college_details  VALUES ('$id','$clg_name','$course','$no_of_branches','$username','$password','$reenter_password')";
                //$sql = "CREATE DATABASE $clg_name";        
                $sql = "CREATE TABLE clg_info (
                    image BLOB)";

                $sql1 = "CREATE TABLE news (
                    id INT(11) NOT NULL AUTO_INCREMENT,
                    new_news TEXT NULL,
                    PRIMARY KEY (`id`)
                )";

                $faculty_id=$_SESSION["fac_id"];

                $sql2 = "CREATE TABLE lms (image BLOB, image_text text)";


                $sql3 = "CREATE TABLE attendance (stu_id INT(100) NOT NULL,
                Attendance VARCHAR(200))";

                $sql4 = "CREATE TABLE stu_att (stu_id INT(100) NOT NULL)";

                if(mysqli_query($conn, $sql)){
                    echo "<h3>Table created successfully!!!</h3>"; 
        
                    //echo nl2br("\n$id\n $clg_name\n $course\n "
                    // . "$no_of_branches\n $password\n $username \n $reenter_password");
                    //Redirect('login.php', false);
                } 
                else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }
            

                if(mysqli_query($conn, $sql1)){
                    echo "<h3>Table created successfully!!!</h3>"; 
        
                    //echo nl2br("\n$id\n $clg_name\n $course\n "
                    // . "$no_of_branches\n $password\n $username \n $reenter_password");
                    //Redirect('login.php', false);
                } 
                else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }

                if(mysqli_query($conn, $sql2)){
                    echo "<h3>Table created successfully!!!</h3>"; 
        
                    //echo nl2br("\n$id\n $clg_name\n $course\n "
                    // . "$no_of_branches\n $password\n $username \n $reenter_password");
                    //Redirect('login.php', false);
                } 
                
                else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }

                if(mysqli_query($conn, $sql3)){
                    echo "<h3>Table created successfully!!!</h3>"; 
        
                    //echo nl2br("\n$id\n $clg_name\n $course\n "
                    // . "$no_of_branches\n $password\n $username \n $reenter_password");
                    //Redirect('login.php', false);
                } 
                else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }
                if(mysqli_query($conn, $sql4)){
                    echo "<h3>Table created successfully!!!</h3>"; 
        
                    //echo nl2br("\n$id\n $clg_name\n $course\n "
                    // . "$no_of_branches\n $password\n $username \n $reenter_password");
                    Redirect('login.php', false);
                } 
                else{
                    echo "ERROR: Hush! Sorry $sql4. " 
                        . mysqli_error($conn);
                }
            }
            else{
                echo"<h3>Password not matched</h3>";
            }
          
        // Close connection
        mysqli_close($conn);


        ?>
    </center>
</body>
  
</html>