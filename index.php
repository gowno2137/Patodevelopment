<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Patodevelopment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .carousel {
            width: 50%;
            height: 50%;
            margin: auto;
        }

        .carousel img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 10px;
            
        }
        p, h5{
            color: white;
        }
    </style>
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
                    <li class="nav-item"><a class="nav-link active" href="index.php" aria-current="page">Strona główna</a></li>
                    <li class="nav-item"><a class="nav-link" href="loteria.php">Loteria</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
                    <li class="nav-item"><a class="nav-link" href="opinie.php">Opinie</a></li>
                    <li class="nav-item"><a class="nav-link" href="kupMieszkanie.php">Kup mieszkanie</a></li>
                    <li class="nav-item"><a class="nav-link" href="kupDom.html">Kup dom</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <marquee behavior="" direction="" scrollamount="50" style="font-size: 50px; color: black;-webkit-text-stroke: 2px white;"><b>Kup mieszkanie na Lipinach Kup Lipiny Kup mieszkanie na Lipinach Kup Lipiny Kup mieszkanie na Lipinach Kup Lipiny Kup mieszkanie na Lipinach Kup Lipiny </b></marquee>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Pierwszy slajd"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Drugi slajd"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Trzeci slajd"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="l1.jpg" class="d-block" alt="Pierwszy obraz">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nowoczesne apartamenty</h5>
                    <p>Styl i komfort w sercu miasta.</p>
                    <button type="button" class="btn btn-warning">Kup dzielnice za jedyne 195.000zł</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="l2.jpg" class="d-block" alt="Drugi obraz">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Przytulne przestrzenie</h5>
                    <p>Doskonałe miejsce do życia i relaksu.</p>
                    <button type="button" class="btn btn-warning">jedno mieszkanie 1m^2 za 250.000zł</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="l4.jpg" class="d-block" alt="Trzeci obraz">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Twój wymarzony dom</h5>
                    <p>Znajdź swoje idealne miejsce na ziemi.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Poprzedni</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Następny</span>
        </button>
    </div>
    <div class="text-center m-3"><h1>Zamów swoje nowe wymarzone mieszkanie z dostawą pod drzwi</h1><button class="btn btn-primary">Kup mieszkanie -10%</button></div>
    
    <div class="container bg-secondary-subtle p-3 rounded-4 text-center fs-5 text"><h5>Najnowsze informacje</h5>
    <br><p>Sprzedaliśmy cały blok milionerowi za 5 milionów złotych</p>
    <br><p>Kupiliśmy nową kamiennice w lipinach(nowe mieszkania nadchodzą)</p>
    <br><p>Wyprzedarz domów na terenach zalewowych!!!</p>
    </div>
    <img src="Patodevelopment1.png" alt="pato">
</body>
</html>
