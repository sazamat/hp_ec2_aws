<?php

$email = $_POST["email"];




        
$conn = mysqli_connect("localhost", "hp", "789789", "cloud_project") or die("connection failed");
        

    

$sql = "INSERT INTO newsletter(email) VALUES ('{$email}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://16.171.193.196//contacts.php");
mysqli_close($conn);

echo "Record saved.";
