<!DOCTYPE html>
<html>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet"> -->
<link href="login-CSS(Style).css" rel="stylesheet">
<body>
<!-- <div class="infodis"> -->
<?php
session_start();
$servername = "localhost";
$username = $_POST["user"];
$password = $_POST["password"];
$dbname = "Uni-II";
$_SESSION["servername"] = $servername;
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$_SESSION["dbname"] = 	$dbname;
// Create connection
//$conn = new mysqli($servername, $username, $password,$dbname);
$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"],$_SESSION["dbname"]);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<h1>Student Info </h1>";
echo "<p>Connected successfully</p>";
$sql = "SELECT * FROM `student-xc` WHERE `User_name`= '".$_SESSION["username"]."'";
$result = mysqli_query($conn, $sql);
  $row = $result->fetch_assoc() ;
  $Sid ="<h2>Student ID : ".$row["ID"]."</h2>" ;
  $Sname="<h2>Name: ".$row["name"]."</h2>" ;
  $Sdept_name="<h2> Department name : ".$row["dept_name"]."</h2>";
  $Stot_cred="<h2> Total Credit Hours: ".$row["tot_cred"]."</h2>";
    echo "".$Sid. "".$Sname. "".$Sdept_name."".$Stot_cred;
?><br>
 <a href="course-input.php" class="button">Courses ++</a>
 <a href="Log-Out.php" class="button">Log Out</a>
</body>
</html>
