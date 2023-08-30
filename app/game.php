<?php
require 'db_connect.php';
session_start();
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.ico"/>
    <title>Enjoy !!!</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="background"></div>
    <img src="images/Bird.png" alt="bird-img" class="bird" id="bird-1">
    <div class="message">
        Enter To Start Game <p><span style="color: red;">&uarr;</span> ArrowUp to Control</p>
    </div>
    <div class="score">
        <span class="score_title"></span>
        <span class="score_val"></span>
    </div>
</body>
</html>