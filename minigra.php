<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gra z ciągiem znaków</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .sequence {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }
        input {
            font-size: 1.5rem;
            padding: 0.5rem;
            text-align: center;
            width: 300px;
            margin-bottom: 1rem;
        }
        .message {
            font-size: 1.2rem;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Wpisz ciąg znaków!</h1>
    <div class="sequence" id="sequence">?</div>
    <input type="text" id="input" placeholder="Wpisz tutaj" />
    <p class="message" id="message">Masz 5 sekund!</p>

    <script>
        let currentSequence = '';
        let timer;
        let isGameOver = false;

        // Funkcja generująca losowy ciąg znaków
        function getRandomSequence(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                result += characters[Math.floor(Math.random() * characters.length)];
            }
            return result;
        }

        // Funkcja rozpoczynająca nową rundę
        function startNewRound() {
            if (isGameOver) return;

            currentSequence = getRandomSequence(5); // Długość ciągu znaków
            document.getElementById('sequence').textContent = currentSequence;
            document.getElementById('message').textContent = 'Masz 5 sekund!';
            document.getElementById('input').value = ''; // Czyszczenie pola tekstowego

            clearTimeout(timer);
            timer = setTimeout(() => {
                endGame(false); // Koniec gry, jeśli czas minął
            }, 5000);
        }

        // Funkcja kończąca grę
        function endGame(success) {
            isGameOver = true;
            clearTimeout(timer);
            const messageElement = document.getElementById('message');
            const sequenceElement = document.getElementById('sequence');

            if (success) {
                sequenceElement.textContent = 'Wygrałeś!';
                messageElement.textContent = 'Gratulacje, wpisałeś właściwy ciąg!';
            } else {
                sequenceElement.textContent = 'Przegrałeś!';
                messageElement.textContent = `Nie zdążyłeś wpisać: ${currentSequence}. Odśwież stronę, aby zagrać ponownie.`;
            }

            document.getElementById('input').disabled = true; // Wyłączenie pola tekstowego
        }

        // Obsługa wpisywania ciągu znaków
        document.getElementById('input').addEventListener('input', (event) => {
            if (isGameOver) return;

            if (event.target.value === currentSequence) {
                startNewRound(); // Nowa runda, jeśli ciąg jest poprawny
            }
        });

        // Start gry
        startNewRound();
    </script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <select name="wybierz" id="wybierz">
    <option value=1>papier</option>
    <option value=2>kamien</option>
    <option value=3>nozyce</option>
    </select>
    <input type="submit" value="ok" name="ok">
    </form>
    <?php
    $ilewygranych=0;
    $ileprzegranych=0;
    if(isset($_POST["wybierz"])&&isset($_POST["ok"])){
    $wybierz=$_POST["wybierz"];
    $losowa = rand(1,3);
    if($wybierz == $losowa){
        echo"wygrales ";
        if($wybierz==1){
            echo"przeciwnik dał kamień";
        }
        if($wybierz==2){
            echo"przeciwnik dał nozyce";
        }
        if($wybierz==3){
            echo"przeciwnik dał papier";
        }
        $ilewygranych+=1;
    }
    else{
        echo"przegrales ";
        if($wybierz==3){
            echo"przeciwnik dał kamień";
        }
        if($wybierz==1){
            echo"przeciwnik dał nozyce";
        }
        if($wybierz==2){
            echo"przeciwnik dał papier";
        }
        $ileprzegranych+=1;
    }
}
echo "<br>przegrałeś: ".$ileprzegranych.", wygrałeś: ".$ilewygranych;
    ?>
</body>
</html>