<?php 
$conn = mysqli_connect("localhost:3307","root","","user_details");

if(!$conn){
    die("connection failed" .mysqli_connect_error());
}
?>