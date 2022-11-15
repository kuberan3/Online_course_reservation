<html>
<body>
<center>
<?php
	$conn = mysqli_connect("localhost", "root", "", "online");
	if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
	}
	
	$fname =  $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $gender =  $_REQUEST['gender'];
	$course =  $_REQUEST['course'];
        $department = $_REQUEST['department'];
        $mobile =  $_REQUEST['mobile'];
	$email =  $_REQUEST['email'];
	
	// table name is students
	
	$sql = "INSERT INTO students  VALUES ('$fname','$lname','$gender','$course','$department','$mobile','$email')";
	
	 if(mysqli_query($conn, $sql)){
            echo "<h3>you have successfully registered."
                . " to view the updated data</h3>";
 
            echo nl2br("\n$fname\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
	 mysqli_close($conn);
        ?>

</center>
</body>
</html>