<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$query = "SELECT * FROM personal_details WHERE username='$username'";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    
    $row = mysqli_fetch_assoc($result);

    $verify = password_verify($password,$row['password']);
    if($verify == 1){
      echo "login sucessful";
    }else{
     echo "password did not match !!";
    }
   
    

}
mysqli_close($conn);
