<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is online
$database = 'online';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM students ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>admin page</title>
    <link rel="stylesheet" href="admin.css">
</head>
 
<body>
    <section>
        <h1>Registered students details</h1>
        <table>
            <tr>
                <th>name</th>
                <th>gender</th>
                <th>course</th>
                <th>department</th>
		<th>mobile</th>
		<th>email</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['course'];?></td>
                <td><?php echo $rows['department'];?></td>
		<td><?php echo $rows['mobile'];?></td>
		<td><?php echo $rows['email'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>