<?php 

$host ="localhost";
$username = "root";
$password = "";
$db = "login";

$conn = mysqli_connect("$host","$username","$password","$db");
if(!$conn)
{
    
    die(mysqli_connect_errno($conn));
}
?>