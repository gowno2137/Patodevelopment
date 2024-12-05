<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleMieszkanie.css">
    <script src="script.js"></script>
</head>
<body>
    <style>
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .btn-hidden {
            transform: translateY(100%);
            transition: transform 0.3s ease, opacity 0.3s ease;
            opacity: 0;
        }
        .card-hover:hover .btn-hidden {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
    
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
                <a class="nav-link" href="opinie.php">Opinie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active kup" href="kupMieszkanie.php" aria-current="page">Kup mieszkanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link kup" href="kupDom.html">Kup dom</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    
    <div class="container my-5">
        <h1 class="text-center mb-4">Wybierz swoją opcję</h1>
        <div class="row justify-content-center">
            <div class="col-md-5 mb-4">
                <div class="card card-hover h-100 shadow">
                    <img src="l1.jpg" class="card-img-top" alt="Kreator Mieszkania">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kreator Mieszkania</h5>
                        <p class="card-text text-center">
                            Zaprojektuj mieszkanie do <b>naszych</b> potrzeb.
                        </p>
                    </div>
                    <div class="card-footer text-center border-top-0">
                        <a href="kreator.php" class="btn btn-primary btn-hidden">Wybierz Kreator</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="card card-hover h-100 shadow">
                    <img src="l2.jpg" class="card-img-top" alt="Gotowe Mieszkanie">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kupienie Gotowego Mieszkania</h5>
                        <p class="card-text text-center">
                            Wybierz jedno z naszych gotowych mieszkań i wprowadź się za rok!
                        </p>
                    </div>
                    <div class="card-footer text-center border-top-0">
                        <a href="mieszkagotowiec.html" class="btn btn-success btn-hidden">Kup Gotowe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-secondary-subtle p-3 rounded-4 text-center fs-5"><h5>Co wybrać?</h5>
    <br><p>Jeżeli wolisz gotowe miaszkanie i w sumie cie nie obchodzi jak będzie wyglądać twoje mieszkanie to kup gotowca(kosztuje Dużo)</p>
    <br><p>Jeżeli wolisz własne mieszkanie i jesteś bogaty to wybierz kreator(kosztuje Więcej)</p>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.card-hover').on('click', function () {
                $(this).find('.btn-hidden').toggleClass('show');
            });
        });
    </script>




        </div>
        <!-- <img src="l5.jpg" alt=""> -->
    </div>
</body>
</html>