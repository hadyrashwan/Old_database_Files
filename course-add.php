<!DOCTYPE html>
<html>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet"> -->
<link href="login-CSS(Style).css" rel="stylesheet">
<body>
<!-- <div class="infodis"> -->

<?php
session_start();
$Sub1 = $_POST["Sub-1"];
$Sub2 = $_POST["Sub-2"];
$Sub3 = $_POST["Sub-3"];
$Sub4 = $_POST["Sub-4"];


// Create connection
//$conn = new mysqli($servername, $username, $password,$dbname);
$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"],$_SESSION["dbname"]);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<p>Connected successfully</p>";
$sql = "INSERT INTO `Uni-II`.`Student-Add` (`UserName`, `Course`) VALUES ( '".$_SESSION["username"]."' , '" .$Sub1."' );";

if (mysqli_query($conn, $sql)) {
    echo "<h1>New record created successfully</h1>";
    echo "<br><h1>Your Request Of  The Following Courses Has been Sent</h1>";
    echo"<h1><br>".$Sub1." THE ONE THAT ACCULLY BEEN SENT ----1 </h1> " ;
    
} else {
    echo "1----Error: " . $sql . "<br>" . mysqli_error($conn);
}
//////SQL-SUB1
$sql2 = "INSERT INTO `Uni-II`.`Student-Add` (`UserName`, `Course`) VALUES ( '".$_SESSION["username"]."' , '" .$Sub2."' );";

if (mysqli_query($conn, $sql2)) {
    echo "<h1>New record created successfully</h1>";
    echo "<br><h1>Your Request Of  The Following Courses Has been Sent</h1>";
    echo"<h1><br>".$Sub2." THE ONE THAT ACCULLY BEEN SENT----2 </h1> " ;
    
} else {
    echo "2----Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
////SQL-SUB2
$sql3 = "INSERT INTO `Uni-II`.`Student-Add` (`UserName`, `Course`) VALUES ( '".$_SESSION["username"]."' , '" .$Sub3."' );";

if (mysqli_query($conn, $sql3)) {
    echo "<h1>New record created successfully</h1>";
    echo "<br><h1>Your Request Of  The Following Courses Has been Sent</h1>";
    echo"<h1><br>".$Sub3." THE ONE THAT ACCULLY BEEN SENT -----3 </h1>" ;
    
} else {
    echo "3---Error: " . $sql3 . "<br>" . mysqli_error($conn);
}
///SQL-SUB 3
$sql4 = "INSERT INTO `Uni-II`.`Student-Add` (`UserName`, `Course`) VALUES ( '".$_SESSION["username"]."' , '" .$Sub4."' );";

if (mysqli_query($conn, $sql4)) {
    echo "<h1>New record created successfully</h1>";
    echo "<br><h1>Your Request Of  The Following Courses Has been Sent</h1>";
    echo"<h1><br>".$Sub4." THE ONE THAT ACCULLY BEEN SENT ----- 4 </h1>" ;
    
} else {
    echo "4----Error: " . $sql4 . "<br>" . mysqli_error($conn);
}

///SQL-SUB4
mysqli_close($conn);
?>
?><br>
 <a href="Info-Student.php" class="button">Your Info</a>
  <a href="Log-Out.php" class="button">Log Out</a>
</body>
</html>
