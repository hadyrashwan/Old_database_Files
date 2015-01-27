<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = $_POST["user"];
$password = $_POST["password"];
$dbname = "Uni-II";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql = "SELECT * FROM `student-xc` WHERE `User_name`= '".$username."'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["ID"]." ". " <br> Name: ". $row["name"]. " "."<br> department name : ". $row["dept_name"]."<br> total credits: ". $row["tot_cred"];
     }
} else {"<br>" ;
     echo "0 results";
}
?>
</body>
</html>