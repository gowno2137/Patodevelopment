<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-image: url(l5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            overflow:hidden;
            color:white;
            margin:20px;
            text-align:center;
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
    <main class="container-sm bg-secondary-subtle p-3 w-50 rounded-4 text-center fs-4 text">
        <form method="post">
            <input type="number" class="m-2" name="wymiary" placeholder="wymiary (m²)"><br>
            czy balkon:
            <input type="checkbox" name="balkon"><br>
            kolor:
            <select name="kolor" class="m-3">
                <option value="Czerwony">Czerwony</option>
                <option value="Żółty">Żółty</option>
                <option value="Niebieski">Niebieski</option>
                <option value="Czarny">Czarny</option>
                <option value="Brązowy">Brązowy</option>
                <option value="Brak">Bez ścian</option>
            </select><br>
            lokalizacja:
            <select name="lokalizacja">
                <option value="Lipiny">Lipiny</option>
                <option value="Bobrek">Bobrek</option>
                <option value="Szombierki">Szombierki</option>
                <option value="Chebzie">Chebzie</option>
                <option value="Wirek">Wirek</option>
                <option value="Bykowina">Bykowina</option>
            </select><br>
            <input class="btn btn-primary m-3" type="submit" value="KUP">
        </form>
    </main>
    <?php
        if (!empty($_POST["wymiary"]) && !empty($_POST["kolor"]) && !empty($_POST["lokalizacja"])) {
            echo "ez";
        }
    ?>
</body>
</html>
