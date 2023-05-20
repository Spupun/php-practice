<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="rhymesGame.php" method="get">
        Color:<input type="text" name="color"><br>
        Plural Noun:<input type="text" name="pluralnoun"><br>
        Celebraty:<input type="text" name="celebraty"><br>

        <input type="submit">
    </form>


  <?php
  $color= $_GET['color'];
  $pluralNoun =$_GET['pluralnoun'];
  $celebraty=$_GET["celebraty"];
  echo "Roses are $color <br>";
  echo " $pluralNoun is blue <br>";
  echo "I love $celebraty <br>";
  
  ?>
</body>
</html>