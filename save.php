<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "hp", "789789", "cloud_project") or die("connection failed");
$sql = "INSERT INTO contact_form(First_name, Last_name, Email, Message) VALUES ('{$fistname}','{$lastname}','{$email}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
echo "successfully saved";
header("location: http://13.60.18.50/contacts.php");
mysqli_close($conn);
?>