<?php
    $db_id = mysqli_connect("localhost", "root", "", "patodevelopment");

    switch (@$_GET["name"]) {
        case '135':
            $name = "Kopernikus sala 135";
            break;
        case 'krotka':
            $name = "krotka";
            break;
    
        
        default:
            echo "<h1>Coś poszło nie tak</h1>";
            break;
    }
    $sql = mysqli_query($db_id, "SELECT * FROM gotowemieszkania WHERE name = '$name'");
    while ($row=$sql->fetch_assoc()) {
        echo "<img src='zdj/".$row["photo"].".png
        '>";
        echo "<h1>".$row["name"]."</h1>" . $row["description"] . $row["name"] . $row["street"] . $row["price"] . $row["left"];
    }
?>