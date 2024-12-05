<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <!-- <form action="" method="post">
        <h2>Zaloguj się</h2>
        <label for="email">email: <input type="email" name="email" placeholder="email"></label>
        
        <label for="haslo">hasło: <input type="password" name="haslo" placeholder="hasło"></label>
        <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Akceptuję regulamin firmy patodevelopment
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div><br>
        <input class="btn btn-primary" type="submit" value="Zaloguj">
    </form> -->

    <form method="post" class="row g-3">
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">email</label>
        <input type="email" class="form-control" id="validationDefault01" name=email required="">
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">hasło</label>
        <input type="password" class="form-control" id="validationDefault02" name="password" required="">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" name="terms" required="">
          <label class="form-check-label" for="invalidCheck2">
            Akceptuję regulamin firmy patodevelopment
          </label>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
    <script>

    </script>
    <?php
        session_start();

        $dbid = mysqli_connect("localhost", "root", "", "patodevelopment");
        if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["terms"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($dbid, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row["password"])) {
                    $_SESSION["email"] = $email;
                    echo $_SESSION["url"];
                    header('Location: '. $_SESSION["url"]);
                    exit;
                }
            }
        }
    ?>
</body>
</html>