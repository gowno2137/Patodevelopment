<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>kontakt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        a{
        text-decoration:none;
        color:white;
        }
    </style>
</head>
<body>

<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Patodeveloperka</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Strona główna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="loteria.php">Loteria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="kontakt.php" aria-current="page">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="opinie.php">Opinie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kupMieszkanie.php">Kup mieszkanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kupDom.html">Kup dom</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <h1>Kreator</h1>
    <form action="" method="post">
    <label for="wielkosc">wpisz metraż mieszkania (m^2):<input type="number" name="wielkosc" placeholder="metry kwadratowe"></label>
    <label for="pokoje">wpisz ile potrzebujesz pokoji:<input type="number" name="pokoje" placeholder="pokoje"></label>
    <label for="balkon">czy chcesz balkon</label>
    <select name="balkon" id="balkon">
        <option value="tak">Chce balkon</option>
        <option value="nie">Nie chce balkonu</option>
    </select>
    <!-- <select name="jpokoje" id="jpokoje">
        <option value="salon">salon</option>
        <option value="kuchnia">kuchnia</option>
        <option value="łazienka">łazienka</option>
        <option value="garderoba">garderoba</option>
        <option value="zpokoj">zwykly pokój</option>
        <option value="sypialnia">sypialnia</option>
    </select> -->
    <input type="submit" value="ok" name="ok">
    </form>
    
    <?php
    if(isset($_POST["pokoje"]) && isset($_POST["wielkosc"]) && isset($_POST["balkon"]) && isset($_POST["ok"])){
    $ilepokoji = $_POST["pokoje"];
    for($i=1;$i<=$ilepokoji;$i++){
        echo "<select name='"."jpokoje".$i."' id='"."jpokoje".$i."'>";
        echo '<option value="salon'.$i.'">salon</option>
            <option value="kuchnia'.$i.'">kuchnia</option>
            <option value="łazienka'.$i.'">łazienka</option>
            <option value="garderoba'.$i.'">garderoba</option>
            <option value="zpokoj'.$i.'">zwykly pokój</option>
            <option value="sypialnia'.$i.'">sypialnia</option>';
        echo"</select>";
    }
    echo $i-1;
}
    $ilepokoji = $_POST["pokoje"];
    if(isset($_POST["ok1"])){
        for($j=1;$j<=$ilepokoji;$j++){
            echo $_POST["pokoje$j"];
        }
    }
    ?>
    <form action="" method="post"><input type="submit" value="ok1" name="ok1"></form>

</body>
</html>