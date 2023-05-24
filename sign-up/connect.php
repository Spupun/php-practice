<?php 

$servername="localhost:3307";
$username="root";
$password="";
$dbname="log";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error){
    die ("connection failed".$conn->connect_error);
}


?>