<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Rejestracja</title>
</head>
<body>
    <main>
        <form method="post">
            <label for="email"><input type="email" name="email" placeholder="email"></label>
            <label for="password"><input type="password" name="password" placeholder="hasło"></label>
            <label for="tel"><input type="tel" name="tel" placeholder="nr. tel"></label>
            <label for="adress"><input type="text" name="adress" placeholder="adres zamieszkania"></label>
            <label for="card"><input type="number" name="card" placeholder="numerki z karty"></label>
            <label for="exp"><input type="text" name="exp" placeholder="data waznosci karty"></label>
            <label for="cvc"><input type="number" name="cvc" placeholder="CVC"></label>
            <input type="submit" value="Zarejestruj">
        </form>
    </main>
    <?php
        $email = @$_POST["email"];
        $password = password_hash(@$_POST["password"], PASSWORD_DEFAULT);
        $tel = @$_POST["tel"];
        $adress = @$_POST["adress"];
        $card = @$_POST["card"];
        $exp = @$_POST["exp"];
        $cvc = @$_POST["cvc"];

        if (!empty($email) && !empty($password) && !empty($tel) && !empty($adress) && !empty($card) && !empty($exp) && !empty($cvc)) {
            $dbid = mysqli_connect("localhost", "root", "", "patodevelopment");
            $sql = "SELECT email FROM users WHERE email='$email'";
            $result = mysqli_query($dbid, $sql);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    echo "Użytjownik z takim adresem email już istnieje";
                }
                else {
                    $sql = "INSERT INTO users (email, password, tel, adress, card, exp, cvc) VALUES ('$email', '$password', '$tel', '$adress', '$card', '$exp', '$cvc')";

                    if (mysqli_query($dbid, $sql)) {
                        echo "Zarejestrowano";
                    }
                    else {
                        echo "Błąd: " . mysqli_error($dbid);
                    }
                }
            }
            mysqli_close($dbid);
        }
        else {
            echo "Błąd";
        }
    ?>
</body>
</html>