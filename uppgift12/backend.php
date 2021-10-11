<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperaturomvandlare</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body>
    <div class="kontainer">
    <h3>Omvandlad txt?</h3>
    <?php
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    $riktning = filter_input(INPUT_POST, 'riktning', FILTER_SANITIZE_STRING);

    if ($riktning == "stora") {
       echo "<p>" . strtoupper($text) . "</p>";
    } else {
       echo "<p>" . strtolower($text) . "</p>";
    }
    
    ?>
    </div>
</body>
</html>