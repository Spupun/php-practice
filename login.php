<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="login.php" method="post">
    Username: <input type="text" name="username"><br>
    Password:<input type="password" name="password"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match your criteria
    if ($username === 'your_username' && $password === 'your_password') {
        // Authentication successful
        echo "Login successful!";
    } else {
        // Authentication failed
        echo "Invalid username or password.";
    }
}
?>
    
</body>
</html>