<html>
  <head>
		<style>
			#header{
				background-color: White;
				width:100%;
				height:200px;
			}
			#link{
			font-size: 26px;
			padding :0px 0px 0px 800px;
			}
			li {
 				 float: right;
				}
            li a {
  				display: block;
  				color: white;
  				text-align: center;
  				padding: 14px 16px;
  				text-decoration: none;
				}
			li a:hover {
  				background-color: #f2cf62;
			}
			ul {
 				 list-style-type: none;
  				 margin: 0;
  				 padding: 0;
  				 overflow: hidden;
  				 background-color: #333;
}

     	#main{
			float:left;
			width:100%;
			height: 400px;
			background-color: lightblue;
			padding : 0px 0px 100px 0px;
		}


			#footer{
				clear:both;
				height: 200px;
				width: 100%;
				background-color: Black;
				color : White;


			}
	

		</style>
	</head>
	<body>
		<div id="header">
            <hr>
        <h1 style="padding :0px 0px 0px 220px;">

        <?php
            $conn1 = mysqli_connect("localhost", "root", "", "erp_system","3308");

            session_start();
                          $_id=$_SESSION["id"];
                          //echo $_SESSION["id"];
                          
                          $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
                          $result = mysqli_query($conn1,$sql);
                          
                          while ($row = $result->fetch_assoc()) {
                              $clg_name2= $row['clg_name'];
                          }
                          //echo "<h1>$clg_name2</h1>";
          
                          
                          
              
            $conn = mysqli_connect("localhost", "root", "", "$clg_name2","3308");
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }

			//session_start();
			

            $records = mysqli_query($conn,"select * from clg_info"); // fetch data from database
            


            while($data = mysqli_fetch_array($records))
            {
            ?>
            
                
                <img src= "<?php echo $data['image']; ?>" width="100" height="100">
           	
            <?php
            }
            ?>
            <?php
           


            mysqli_close($conn1);
            //mysqli_close($conn);
            
              

            ?>
			<div id="link">
				<nav>
				<ul>
                        <li><a href="login_as.php">Log out</a></li>
						<li><a href="lms_stu.php">LMS</a></li>
  						<li><a href="news_stu.php">News</a></li>
					    <li><a class="active" href="stu1.php">Details</a></li>
				</ul></nav>
			</div>
		</div>

		<div id="main">

		<?php

			//$student_id=$_SESSION["stu_id"];
            //echo "$clg_name2";
			$sql = "SELECT new_news FROM news order by id desc LIMIT 1";
			$result1 = mysqli_query($conn,$sql);

			while ($row = $result1->fetch_assoc()) {
				$news1= $row['new_news'];
                
			
			}
			echo "<center><h1>Today we are having review of the web tech and DSBDA</h1></center><hr><br>";

			
			
			

		?>
			

		</div>
		<div id="footer">
            <center>
			<br>

			

			
			<img src="AADM_Symbol.png" alt="My image"
			height="80"
			width="100">

			</h1>
			<hr style="text-decoration-color:red">
			<h3>Web: www.AADM.com</h3>
			<h2> <b>DBMS MINI PROJECT</br></h2>

        </center>


		</div>
	</body>
</html>