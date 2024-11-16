<!DOCTYPE html>
<html lang="pl">
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
    <header class="text-center my-4">
        <h1>Loteria Lootbox</h1>
    </header>
    <nav class="text-center mb-4">
        <a href="index.php" class="mx-2">Strona główna</a>
        <a href="loteria.php" class="mx-2">Loteria</a>
        <a href="kontakt.php" class="mx-2">Kontakt</a>
        <a href="opinie.php" class="mx-2">Opinie</a>
        <a href="kupMieszkanie.php" class="mx-2">Kup mieszkanie</a>
    </nav>
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
            const intervalTime = 100; // Time for each animation step in ms
            let animationCount = 0;
            const maxAnimations = 20; // Number of total animations before result
            const finalOutcome = Math.random() < 0.01 ? "Wygrałeś" : "Przegrałeś"; // 1% chance to win

            // Clear previous result
            resultDiv.innerText = "";
            resultDiv.classList.remove("winning", "losing");

            // Start animation
            const interval = setInterval(() => {
                const randomOutcome = outcomes[Math.floor(Math.random() * outcomes.length)];
                resultDiv.innerText = randomOutcome;
                resultDiv.className = randomOutcome === "Wygrałeś" ? "winning" : "losing";

                animationCount++;
                if (animationCount >= maxAnimations) {
                    clearInterval(interval);
                    // Display final outcome
                    resultDiv.innerText = finalOutcome;
                    resultDiv.className = finalOutcome === "Wygrałeś" ? "winning" : "losing";

                    // Add additional content for winning
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
</body>
</html>
