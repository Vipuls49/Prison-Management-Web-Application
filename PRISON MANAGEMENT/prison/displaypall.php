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

$sql="SELECT prisoner.Rid,prisoner.p_name,prisoner.age,prisoner.doe,prisoner.dob,prisoner.gender,prisoner.crimes,prisoner.dur,prisoner.wt,prisoner.ht,prisoner.addr,prisoner.country,prisoner.state,relatives.Lawyer,relatives.family_mem,relatives.contact FROM prisoner,relatives where prisoner.Rid=relatives.Rid";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
     echo "<table><tr><th>ID</th><th>Name</th><th>Age</th><th>Date of Entrance</th><th>Date of Birth</th><th>Gender</th><th>Crimes</th><th>Duration(months)</th><th>Weight in kg</th><th>Height in cm</th><th>Address</th><th>Country</th><th>State</th><th>Lawyer</th><th>Family Members</th><th>Contact</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["Rid"]."</td>"."<td>".$row["p_name"]."</td>"."<td>".$row["age"]."</td>"."<td>".$row["doe"]."</td>"."<td>".$row["dob"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["crimes"]."</td>"."<td>".$row["dur"]."</td>"."<td>".$row["wt"]."</td>"."<td>".$row["ht"]."</td>"."<td>".$row["addr"]."</td>"."<td>".$row["country"]."</td>"."<td>".$row["state"]."</td>"."<td>".$row["Lawyer"]."</td>"."<td>".$row["family_mem"]."</td>"."<td>".$row["contact"]."</td>"."</tr>";

    }
  
} 

mysqli_close($conn);
?>
<input type="button" onclick="location.href='afterhome1.html'" value="GO BACK <<" align="center" style="width: 150px;height: 50px; margin-bottom: 50px;" >
</body>
</html>
