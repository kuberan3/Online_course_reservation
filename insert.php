<!Doctype html>
<html>
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
	$conn = mysqli_connect("localhost", "root", "", "online");

	if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
	}

	 $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $pass =  $_REQUEST['pass'];
	
	// table name is registration

	$sql = "INSERT INTO registration  VALUES ('$username','$email','$pass')";

	 if(mysqli_query($conn, $sql)){
            echo "<h3>you have successfully registered."
                . " to view the updated data</h3><p>Go to login<a href="index.html"></a></p>";
 
            echo nl2br("\n$username\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
	 mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>