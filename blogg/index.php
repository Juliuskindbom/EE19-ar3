<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/minty/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Bloggen</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="#">Alla inlägg</a></li>
                    <li class="nav-item"><a class="active nav-link" href="./admin/admin.php">Skriva inlägg</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
            file_get_contents("./admin/blogg.txt")
            echo $allText;
            ?>
        </main>
        <footer>
            2021
        </footer>
    </div>
</body>
</html>