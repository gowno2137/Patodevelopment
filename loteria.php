<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Loteria</title>
    <style>
        #result {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
            min-height: 50px; /* To maintain space during animation */
        }
        #result.winning {
            color: green;
        }
        #result.losing {
            color: red;
        }
    </style>
</head>
<body onload="oco()">
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
                <a class="nav-link active" href="loteria.php" aria-current="page">Loteria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontakt.php">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="opinie.php">Opinie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kupMieszkanie.php">Kup mieszkanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kup dom</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <header class="text-center my-4">
        <h1>Loteria</h1>
    </header>
    <div class="text-center">
        <button id="startLottery" class="btn btn-primary" onclick="">Weź udział</button>
        <h3>Co losujemy?</h3>
        <h3 id="oco"></h3>
        <div id="result"></div>
    </div>

    <script>
        document.getElementById("startLottery").addEventListener("click", function () {
            const resultDiv = document.getElementById("result");
            const outcomes = ["Przegrałeś", "Wygrałeś"];
            const intervalTime = 100;
            let animationCount = 0;
            const maxAnimations = 20;
            const finalOutcome = Math.random() < 0.1 ? "Wygrałeś" : "Przegrałeś"; // 10% szans ze wygrasz

            resultDiv.innerText = "";
            resultDiv.classList.remove("winning", "losing");

            const interval = setInterval(() => {
                const randomOutcome = outcomes[Math.floor(Math.random() * outcomes.length)];
                resultDiv.innerText = randomOutcome;
                resultDiv.className = randomOutcome === "Wygrałeś" ? "winning" : "losing";

                animationCount++;
                if (animationCount >= maxAnimations) {
                    clearInterval(interval);
                    resultDiv.innerText = finalOutcome;
                    resultDiv.className = finalOutcome === "Wygrałeś" ? "winning" : "losing";

                    if (finalOutcome === "Wygrałeś") {
                        resultDiv.innerHTML += `
                            <p>Aby odebrać nagrodę, kliknij przycisk poniżej.</p>
                            <a href="wygrana.php" class="btn btn-success">Odbierz wygraną</a>
                        `;
                    }
                }
            }, intervalTime);
        });


    function oco(){
        let oco = Math.floor(Math.random() * 10) + 1;
        if (oco == 1) {
            document.getElementById("oco").innerHTML = "mieszkanie";
        }
        else if (oco == 2) {
            document.getElementById("oco").innerHTML = "dom";
        }
        else if (oco == 3) {
            document.getElementById("oco").innerHTML = "dom na terenie zalewowym";
        }
        else if (oco == 4) {
            document.getElementById("oco").innerHTML = "pół mieszkania";
        }
        else if (oco == 5) {
            document.getElementById("oco").innerHTML = "działka 1mx1m";
        }
        else if (oco == 6) {
            document.getElementById("oco").innerHTML = "miejsce na trumne";
        }
        else if (oco == 7) {
            document.getElementById("oco").innerHTML = "prywatny czarny";
        }
        else if (oco == 8) {
            document.getElementById("oco").innerHTML = "pokój bez okien";
        }
        else if (oco == 9) {
            document.getElementById("oco").innerHTML = "drzwi";
        }
        else{
            document.getElementById("oco").innerHTML = "nic";
        }
        
    }
    </script>
        <h1 class="text-center">Zgadnij liczbę</h1>
        <form method="post" class="text-center">
        Wybierz cyfre od 0-9: <input type="number" name="cyfra" placeholder="cyfra od 0-9" max=9>
        <input type="submit" value="strzelaj">
        <?php
        if(!empty($_POST["cyfra"])){
        $cyfra = $_POST["cyfra"];
        $losowa = rand(0,9);

        if($losowa==$cyfra){
            echo "<h2 style='color:green;'>wygrałeś</h2>";
        }
        else{
            echo "<h2 style='color:red;'>przegrałeś</h2>";
        }
    }
        ?>

    </form>
</body>
</html>
