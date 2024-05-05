<?php

$email = $_POST["email"];




        
$conn = mysqli_connect("localhost", "hp", "789789", "cloud_project") or die("connection failed");
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
    

$sql = "INSERT INTO newsletter(email) VALUES ('{$email}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://13.60.18.50/contacts.php");
mysqli_close($conn);

echo "Record saved.";