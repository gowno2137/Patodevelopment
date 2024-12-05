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

    <form class="row g-3">
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">email</label>
        <input type="text" class="form-control" id="validationDefault01" required="">
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">hasło</label>
        <input type="text" class="form-control" id="validationDefault02" required="">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
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
</body>
</html>