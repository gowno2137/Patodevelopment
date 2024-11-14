<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie</title>
</head>
<body>
    <h1>Opinie</h1>
    <?php
    $db_id = mysqli_connect("localhost", "root", "", "patodevelopment");
    $result = mysqli_query($db_id, "SELECT user, text, rating FROM opinie");

    while ($row=$result->fetch_assoc()) {
        echo $row["user"], $row["rating"], $row["text"];
    }
    ?>
</body>
</html>