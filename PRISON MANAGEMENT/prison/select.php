<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "dissconn";
}



$sql = "SELECT * FROM login where username='$_POST[username]' and password='$_POST[password]'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    // echo "user exists...";
    include 'summary.html';
    }
 else {
    echo "<CENTER>"."<b>"."Invalid Credentials"."</b>"."</CENTER>";
    include 'page.html';
}
$conn->close();
?>
</body>
</html>