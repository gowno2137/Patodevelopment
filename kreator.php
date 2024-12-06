<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
            <input type="number" class="m-2" name="wymiary" placeholder="wymiary (m²)" id="cena"><br>
            czy balkon:
            <input type="checkbox" name="balkon" id="balkon"><br>
            kolor:
            <select name="kolor" id="kolor" class="m-3">
                <option value="10000">Czerwony</option>
                <option value="8000">Żółty</option>
                <option value="9000">Niebieski</option>
                <option value="5500">Czarny</option>
                <option value="2300">Brązowy</option>
                <option value="1200">Bez ścian</option>
            </select><br>
            lokalizacja:
            <select name="lokalizacja" id="lok">
                <option value="198000">Lipiny</option>
                <option value="196000">Bobrek</option>
                <option value="146000">Szombierki</option>
                <option value="121000">Chebzie</option>
                <option value="275000">Wirek</option>
                <option value="230000">Bykowina</option>
            </select><br>
            <input class="btn btn-primary m-3" type="submit" value="KUP">
            <input id="send" name="send" type="number" style="display: none;">
            <h2 class="cena">Cena: </h2>
        </form>
    </main>
    <script>
        $(document).ready(function(){
            $("#cena").val(0);
            var cena = 0;
            $("#cena").change(function() {
                update();
            });
            $("#balkon").change(function() {
                update();
            });
            $("#kolor").change(function() {
                update();
            });
            $("#lok").change(function() {
                update();
            });
            
            function update() {
                cena = 0;
                cena += (20000 * parseInt($("#cena").val()));
                cena += parseInt($("#kolor").val());
                cena += parseInt($("#lok").val());

                if ($("#balkon").prop("checked")) {
                    cena += 37000;
                }
                $(".cena").text("Cena: " + cena + " zł");
                $("#send").val(cena);
            }            
        });
    </script>
    <?php
        if (!empty($_POST["wymiary"]) && !empty($_POST["kolor"]) && !empty($_POST["lokalizacja"]) && !empty($_POST["send"])) {
            $wymiary = $_POST["wymiary"];
            $kolor = $_POST["kolor"];
            $lokalizacja = $_POST["lokalizacja"];
            $send = $_POST["send"];
            $balkon = 0;

            if (isset($_POST["balkon"])) {
                $balkon = 1;
            }

            $db_id = mysqli_connect("localhost", "root", "", "patodevelopment");

            $sql = "INSERT INTO mieszkania (wymiary, balkon, kolor, cena, lokalizacja) VALUES ('$wymiary', '$balkon', '$kolor', '$send', '$lokalizacja')";
            if (mysqli_query($db_id, $sql)) {
                echo "Kupiono mieszkanie, nie sprawdzaj swojego konta bankowego!";
            }
        }
    ?>
</body>
</html>
