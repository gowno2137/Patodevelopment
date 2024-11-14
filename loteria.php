<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>Loteria</h1></header>
    <nav>
    <a href="index.php">Strona główna</a>
    <a href="loteria.php">Loteria</a>
    <a href="kontakt.php">Kontakt</a><a href="opinie.php">Opinie</a>
    <a href="kupMieszkanie.php">Kup mieszkanie</a>
    </nav>
    <form action="" method="post">
    <input type="submit" value="weź udział" name="wez">
    </form>
    <?php
    if(isset($_POST["wez"])){
        $losowe =  rand(1,100);
        // echo $losowe;
        if ($losowe == rand(1,100)) {
            echo "wygrałeś, aby wygrać nagrode naciśnij przycisk";
            echo '<input type="submit" value="odbierz nagrode" name="odbierz nagrode">';
        }
        else{
            echo "przegrałeś, może następnym razem się uda";
        }
    }
    ?>
    
</body>
</html>