<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        $losowe =  rand(1,10);
        // echo $losowe;
        if ($losowe == rand(1,10)) {
            echo "wygrałeś, aby wygrać nagrode naciśnij przycisk";
            echo '<a href="wygrana.php">odbierz wygrana<a>';
        }
        else{
            echo "przegrałeś, może następnym razem się uda";
        }
    }
    ?>
    
</body>
</html>