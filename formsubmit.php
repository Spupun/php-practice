<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="formsubmit.php" method="get">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age">

        <input type="submit">
     </form>

   your name is <?php
    echo   $_GET["name"];
    ?><br>
    and your age is <?php  echo $_GET['age']  ?>
</body>
</html>