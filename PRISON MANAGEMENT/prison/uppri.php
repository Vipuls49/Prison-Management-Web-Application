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

$sql = "UPDATE prisoner SET dur='$_POST[dur]',addr='$_POST[wad]' WHERE Rid='$_POST[reg]';";
$sql.="UPDATE relatives SET contact='$_POST[mob]' WHERE Rid='$_POST[reg]'";

if (mysqli_multi_query($conn, $sql)) {
    echo "Record updated successfully";
    include 'uppri.html';
} else {
    echo "Error updating record: " . mysqli_error($conn);
    include 'uppri.html';
}

mysqli_close($conn);
?>