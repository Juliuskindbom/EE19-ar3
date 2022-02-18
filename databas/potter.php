<?php
include "konfigdb.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>lista på alla filmer</h1>
        <?php
        //sql-satsen vi vill köra
        $sql = "SELECT titel, datum FROM movies";

        //be mysql-servern köra frågan
        $result = $conn->query($sql);

        //gick det bra att köra sql-satsen
        if (!$result) {
            die("något blev fel");
        } else {
            //echo "<p>sql-satsen funkade bra</p>";

            //var_dump($result);

            while ($rad = $result->fetch_assoc()) {
                echo "<p>$rad[datum] $rad[titel]</p>";
            }
        }
        ?>
    </div>
</body>
</html>