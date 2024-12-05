<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(l5.jpg);
            background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height: 100vh;
  overflow:hidden;
        }
    </style>
</head>
<body>

    <?php
    session_start();
    
    if (!isset($_SESSION["email"])) {
        $_SESSION["url"] = "kreator.php";
        header("Location: login.php");
        exit();
    }
?>
</body>
</html>
