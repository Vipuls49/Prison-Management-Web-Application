<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body bgcolor=#fffdd0>
    <p align="right"><a href="summary.html">Home.</a></p>
    <p align="right"><a href="page.html">Log out.</a></p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM staff";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
     echo "<table align"."="."center"."><tr><th>Staff ID</th><th>Name</th><th>Date of Joining</th><th>Gender</th><th>Address</th><th>Post</th><th>Shift</th><th>Contact</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["Sid"]."</td>"."<td>".$row["s_name"]."</td>"."<td>".$row["doj"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["addr"]."</td>"."<td>".$row["post"]."</td>"."<td>".$row["shift"]."</td>"."<td>".$row["contact"]."</td>"."</tr>";

    }
  
} 

mysqli_close($conn);
?>
<input type="button" onclick="location.href='afterhome2.html'" value="GO BACK <<" align="center" style="width: 150px;height: 50px; margin-bottom: 50px;" >
</body>
</html>
