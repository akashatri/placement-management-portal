<?php
 
require 'interview.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$cname    = $conn->real_escape_string($_POST['u_cname']);

$message = $conn->real_escape_string($_POST['u_exp']);
$query   = "INSERT into interview (u_name,u_email,u_cname,u_exp) VALUES('" . $name . "','" . $email . "','" . $cname . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 



mysqli_close($conn);

 
?>