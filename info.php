<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje</title>
    <link rel="stylesheet" href="styleInfo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="d-flex align-items-center">
        <?php
            $db_id = mysqli_connect("localhost", "root", "", "patodevelopment");

            switch (@$_GET["name"]) {
                case '135':
                    $name = "Kopernikus sala 135";
                    break;
                case 'krotka':
                    $name = "Familok Krotka";
                    break;
                case 'wieczorka':
                    $name = "Familok Wieczorka";
                    break;
                case 'okrzei':
                    $name = "Familok Okrzei";
                    break;
                case 'szkolny':
                    $name = "Familok Plac Szkolny";
                    break;
                case 'krzywoustego':
                    $name = "Familok Krzywoustego";
                    break;
                case 'baczynskiego':
                    $name = "Familok Baczynskiego";
                    break;
                case 'florianska':
                    $name = "Familok Florianska";
                    break;
                case 'warsztat':
                    $name = "warsztat";
                    break;
            
                
                default:
                    echo "<h1>Coś poszło nie tak</h1>";
                    break;
            }
            $sql = mysqli_query($db_id, "SELECT * FROM gotowemieszkania WHERE name = '$name'");
            while ($row=$sql->fetch_assoc()) {
                echo "<img class='w-50' src='zdj/".$row["photo"].".png'>";
                echo "<div class=''><h1 class='text-center'>".$row["name"]."</h1><h2 class='text-justify text-center w-75 mx-auto'>" . $row["description"] . "<br>Ulica: " . $row["street"] . "<br>Cena: ". $row["price"] . "zł<br>Ilość pozostałych mieszkań: " . $row["left"] . "</h2></div>";
            }
        ?>
    </main>
    <form method="post">
        <input class="btn btn-primary w-25" type="submit" value="KUP">
    </form>
</body>
</html>