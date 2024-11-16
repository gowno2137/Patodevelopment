<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleOpinie.css">
    <!-- <script src="opinie.js"></script> -->
</head>
<body>
    <style>
        textarea{
            resize: none;
        }

        .star.selected,
        .star:hover,
        .star:hover ~ .star.selected {
            color: gold;
        }
        .stars{
            font-size: 32px;
            color: gold;
        }
        .blankstars{
            font-size: 32px;
            color: grey;
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
                <a class="nav-link active" href="opinie.php" aria-current="page">Opinie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kupMieszkanie.php">Kup mieszkanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" aria-current="page">Kup dom</a>
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
    <div class="overflow-y-auto text-center">
        <?php
        $db_id = mysqli_connect("localhost", "root", "", "patodevelopment");
        $result = mysqli_query($db_id, "SELECT user, text, rating FROM opinie");

        while ($row=$result->fetch_assoc()) {
            $stars = str_repeat('&#9733;', intval($row["rating"]));
            $blankstars = str_repeat('&#9733;', intval(5-$row["rating"]));
            echo "<div class='mt-4'>".$row['user']."</div>";
            echo "<div class='review'><div class='mb-2'><label class='stars'>$stars</label><label class='blankstars'>$blankstars</label></div></div>";
        }
        ?>
    </div>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkLabel">Dodawanie opinii</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form method="post">
                <div class="input-group mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="star bi bi-star-fill" viewBox="0 0 16 16" data-value="1">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="star bi bi-star-fill" viewBox="0 0 16 16" data-value="2">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="star bi bi-star-fill" viewBox="0 0 16 16" data-value="3">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="star bi bi-star-fill" viewBox="0 0 16 16" data-value="4">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="star bi bi-star-fill" viewBox="0 0 16 16" data-value="5">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </div>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Imię/Nick" aria-label="default input" name="name" required>
                </div>
                <div class="input-group mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Treść" name="text" required></textarea>
                </div>
                <div class="input-group mb-3">
                    <input type="hidden" name="rating" id="rating-input" value="">
                    <input class="btn btn-primary" type="submit">
                </div>
            </form>
        </div>
    </div>
    <?php
    if (!empty($_POST["name"]) && !empty($_POST["text"]) && !empty($_POST["rating"])) {
        $name = $_POST["name"];
        $text = $_POST["text"];
        $rating = $_POST["rating"];

        $sql = "INSERT INTO opinie (user, text, rating) VALUES ('$name', '$text', '$rating')";
        mysqli_query($db_id, $sql);
    }
    mysqli_close($db_id);
    ?>
    <script>
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('rating-input');
        
        stars.forEach((star, index) => {
            star.addEventListener('mouseover', () => {
                highlightStars(index);
            });

            star.addEventListener('click', () => {
                resetStars();
                highlightStars(index, true);
                const value = star.getAttribute('data-value');
                ratingInput.value = value;
            });

            star.addEventListener('mouseout', () => {
                if (!ratingInput.value) resetStars(); 
            });
        });

        function highlightStars(index, permanent = false) {
            for (let i = 0; i <= index; i++) {
                stars[i].classList.add(permanent ? 'selected' : 'hover');
            }
        }

        function resetStars() {
            stars.forEach(star => {
                star.classList.remove('selected', 'hover');
            });
        }
    </script>
</body>
</html>