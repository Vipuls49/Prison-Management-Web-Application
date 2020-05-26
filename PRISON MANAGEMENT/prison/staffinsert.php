<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// if(isset($_POST["submit"])){
//     $check = getimagesize($_FILES["image"]["tmp_name"]);
//     if($check !== false){
//         $image = $_FILES['image']['tmp_name'];
//         $imgContent = addslashes(file_get_contents($image));

//         /*
//          * Insert image data into database
//          */
        
//         //DB details
//         $dbHost     = 'localhost';
//         $dbUsername = 'root';
//         $dbPassword = '';
//         $dbName     = 'pro';
        
//         //Create connection and select DB
//         $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
//         // Check connection
//         if($db->connect_error){
//             die("Connection failed: " . $db->connect_error);
//         }
        
//         // $dataTime = date("Y-m-d H:i:s");
        
//         //Insert image content into database
//         $insert = $db->query("INSERT into pimage (pid, image) VALUES ('$_POST[reg]','$imgContent' )");
//         if($insert){
//             echo "File uploaded successfully.";
//         }else{
//             echo "File upload failed, please try again.";
//         } 
//     }else{
//         echo "Please select an image file to upload.";
//     }
// }



$sql = "INSERT INTO staff (Sid, s_name, doj, gender, addr, post, shift, contact)
VALUES ('$_POST[idno]', '$_POST[name]', '$_POST[ent]','$_POST[gender]','$_POST[wad]','$_POST[post]','$_POST[shift]','$_POST[mob]')";


if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
    include 'staffinsert.html';
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    include 'staffinsert.html';
}

mysqli_close($conn);
?>
