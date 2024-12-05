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
    <main>
        <form method="post">
            <input type="number" name="wymiary">
            <input type="checkbox" name="balkon">
            <select name="kolor">
                <option value="Czerwony">Czerwony</option>
                <option value="Żółty">Żółty</option>
                <option value="Niebieski">Niebieski</option>
                <option value="Czarny">Czarny</option>
                <option value="Brązowy">Brązowy</option>
                <option value="Brak">Bez ścian</option>
            </select>
            <select name="lokalizacja">
                <option value="Lipiny">Lipiny</option>
                <option value="Bobrek">Bobrek</option>
                <option value="Szombierki">Szombierki</option>
                <option value="Chebzie">Chebzie</option>
                <option value="Wirek">Wirek</option>
                <option value="Bykowina">Bykowina</option>
            </select>
            <input type="submit" value="KUP">
        </form>
    </main>
    <?php
        if (!empty($_POST["wymiary"]) && !empty($_POST["kolor"]) && !empty($_POST["lokalizacja"])) {
            echo "ez";
        }
    ?>
</body>
</html>
