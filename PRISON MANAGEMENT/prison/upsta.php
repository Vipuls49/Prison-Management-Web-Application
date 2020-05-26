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

$sql = "UPDATE staff SET contact='$_POST[mob]',post='$_POST[po]',shift='$_POST[shift]' WHERE Sid='$_POST[idno]'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    include 'upsta.html';
} else {
    echo "Error updating record: " . mysqli_error($conn);
    include 'uppri.html';
}

mysqli_close($conn);
?>