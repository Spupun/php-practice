<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="get">
  Enter 1st num: <input type="number" name="num1"><br>
  Enter 2nd num: <input type="number" name="num2"><br>
  <input type="submit">
  </form>

  Ans : <?php echo $_GET["num1"] + $_GET["num2"] ?>

</body>
</html>