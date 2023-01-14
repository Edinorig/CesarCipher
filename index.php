<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>
  <form action="./cifered.php" method="post">
    <h2>Insert text to cipher</h2>
    <textarea name="plainText" id="" cols="30" rows="10"></textarea>
    <input type="number" name="key">
    <input type="submit" value="Submit">
  </form>

  <form action="./decifered.php" method="post">
    <h2>Insert text to decipher</h2>
    <textarea name="ciffered" id="" cols="30" rows="10"></textarea>
    <input type="number" name="key">
    <input type="submit" value="Submit">
  </form>
  
  <form action="./brootForce.php" method="post">
    <h2>Brute force</h2>
    <textarea name="brootforce" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
  </form>
</body>
</html>