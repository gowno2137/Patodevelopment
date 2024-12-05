<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    <main>
        <form method="post">
            <label for="email"><input type="email" name="email"></label>
            <label for="password"><input type="password" name="password"></label>
            <label for="tel"><input type="tel" name="tel"></label>
            <label for="adress"><input type="text" name="adress"></label>
            <label for="card"><input type="number" name="card"></label>
            <label for="exp"><input type="text" name="exp"></label>
            <label for="cvc"><input type="number" name="cvc"></label>
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