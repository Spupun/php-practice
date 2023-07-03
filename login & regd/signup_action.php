<?php
include "connect.php";

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $secure_pass = password_hash($password, PASSWORD_BCRYPT);
 

    $sql = "INSERT INTO personal_details(name,phone,email,username,password) values('$name','$phone','$email','$username','$secure_pass')";

    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "Registration Successfully !!";
        header("location:login.php");
        
    }
}
?>