
<?php  include("connect.php")?>

<html>
<head>
<title>page design</title>
</head>
<body>
<!-- <div style="height:100%;width:40%;background:gainsboro;float:left;">
<center><br><br><br><br><br><br>
<div style="height:10%;width:80%;background:blue;border-radius:50%;">
<h1 style="color:white;"><u>Login In</u></h1>
</div>
<div style="height:50%;width:80%;background:blue;border-radius:50%;">
<br><br><br><br>
<table width=350px height=200px style="color:white;font-size:0.6cm;">
<tr>
<td>Username:</td>
<td><input type="text" placeholder="enter your username" style="height:40px;width:250px;border-radius:20pt;border-style:solid;"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" placeholder="enter your password" style="height:40px;width:250px;border-radius:20pt;border-style:solid;"></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="button" value="submit" style="height:40px;width:100px;border-radius:20pt;background:red;font-size:0.5cm;color:white;"></td>
</tr>
</table>
</div>
</div>
<div style="height:100%;width:60%;background:grey;float:left;"> -->

<form action="" method="POST">
<center><br><br><br>
<div style="height:10%;width:80%;background:blue;border-radius:50%;">
<h1 style="color:white;"><u>Registration</u></h1>
</div>
<div style="height:70%;width:80%;background:blue;border-radius:50%;">
<br><br><br><br><br>
<table width=350px height=200px style="color:white;font-size:0.6cm;">
<tr>
<td>Username:</td>
<td><input type="text" name="uname" placeholder="enter your username" style="height:40px;width:250px;border-radius:20pt;border-style:solid;"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" placeholder="enter your password" style="height:40px;width:250px;border-radius:20pt;border-style:solid;"></td>
</tr>
<tr>
<td>Re-Password:</td>
<td><input type="password" name="confirm_password" placeholder="enter password again" style="height:40px;width:250px;border-radius:20pt;border-style:solid;"></td>
</tr>
<tr>
<td>Email-id:</td>
<td><input type="text" name="email"placeholder="enter your email-id" style="height:40px;width:250px;border-radius:20pt;border-style:solid;"></td>
</tr>
<tr>
<td>Mobile:</td>
<td><input type="text" name="mobile" placeholder="enter your mobile no" style="height:40px;width:250px;border-radius:20pt;border-style:solid;"></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" name="register" value="sign-up" style="height:40px;width:100px;border-radius:20pt;background:green;font-size:0.5cm;color:white;"></td>
</tr>
</table>
</div>
</div>
</form>
</body>
</html>

<?php


if(isset($_POST["register"])){
  $uname = $_POST['uname'];
  $password=$_POST['password'];
  $confirm_pasword=$_POST['confirm_password'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];

 $sql= "INSERT INTO stu VALUES('$uname','$password','$confirm_pasword','$email','$mobile')";

 $data=mysqli_query($conn,$sql);

 if($data){
    echo "Login Successful";
 }else{
    echo "error";
 }

}

?> 




