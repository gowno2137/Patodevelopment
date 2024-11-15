<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleOpinie.css">
</head>
<body>
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
                <a class="nav-link" href="loteria.php">Loteria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontakt.php">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="opinie.php" aria-current="page">Opinie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kupMieszkanie.php">Kup mieszkanie</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="d-flex justify-content-around align-items-center">
        <h1>Opinie</h1>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
            Dodaj opinię
        </button>
    </div>
    <?php
    $db_id = mysqli_connect("localhost", "root", "", "patodevelopment");
    $result = mysqli_query($db_id, "SELECT user, text, rating FROM opinie");

    while ($row=$result->fetch_assoc()) {
        echo $row["user"], $row["rating"], $row["text"];
    }
    ?>
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkLabel">Dodawanie opinii</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            
        </div>
    </div>
</body>
</html>