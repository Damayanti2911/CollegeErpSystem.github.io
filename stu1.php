<html>
  <head>
		<style>
			#header{
				background-color: White;
				width:100%;
				height:200px;
			}
			#link{
			font-size: 20px;
			padding :0px 0px 0px 400px;
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


			body{
    padding: 0;
    margin: 0;
    background: #17202A ;
}

footer{
    background:#EBF5FB;
    justify-content: flex-end;
    height: 130px;
    text-align:center
}
.navbar{
    background:#EBF5FB  
;
}
.nav-link,
.navbar-brand {
    color: #17202A ;
    cursor: pointer;
}
.nav-link {
    margin-right: 1em !important;
}
.nav-link:hover {
    color: #000 ;
}
.navbar-collapse{
    justify-content: flex-end;
}
.image{
    height:100px;
	width:100px;
    padding-left:400px;
    align-items: right;
        justify-content: right;
}
.background-radial-gradient {
      height:100%;
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

	

		</style>
	</head>
	<body>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
           
		<div id="header">
            <hr>
        <h1 style="padding :0px 0px 0px 220px;">

        <?php
            $conn1 = mysqli_connect("localhost", "root", "", "erp_system", "3308");

            session_start();
                          $_id=$_SESSION["id"];
                          //echo $_SESSION["id"];
                          
                          $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
                          $result = mysqli_query($conn1,$sql);
                          
                          while ($row = $result->fetch_assoc()) {
                              $clg_name2= $row['clg_name'];
                          }
                          //echo "<h1>$clg_name2</h1>";
          
                          
                          
              
            $conn = mysqli_connect("localhost", "root", "", "$clg_name2", "3308");
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
  						<li><a href="#Contact">Fees</a></li>
						<li><a href="att_stu.php">Attendance</a></li>
  						<li><a href="news_stu.php">News</a></li>
					    <li><a class="active" href="stu1.php">Details</a></li>
				</ul></nav>
			</div>
		</div>

		<section class="background-radial-gradient overflow-hidden">
    

		<?php

			$student_id=$_SESSION["stu_id"];
			$sql = "SELECT name, branch, class, prn FROM stu_info WHERE stu_id = $student_id";
			$result1 = mysqli_query($conn,$sql);

			while ($row = $result1->fetch_assoc()) {
				$name1= $row['name'];
				$branch1= $row['branch'];
				$class1= $row['class'];
				$prn1= $row['prn'];
			}
			echo "<center><p> <font color=white><h1>Welcome $name1</h1></center><hr><br>";
			echo "<center><p> <font color=white><h3> Student ID: $student_id </h3></center>";
			echo "<center><p> <font color=white><h3> Branch: $branch1 </h3></center>";
			echo "<center><p> <font color=white><h3> Class: $class1 </h3></center>";
			echo "<center><p> <font color=white><h3> PRN: $prn1 </h3></center>";
			
			

		?>
			

		</div>
		
	</body>

</html>