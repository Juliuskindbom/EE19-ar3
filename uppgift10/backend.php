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
    <h3>Hur varmt är det?</h3>
    <?php
    $temp = filter_input(INPUT_POST, 'temp', FILTER_SANITIZE_STRING);
    $riktning = filter_input(INPUT_POST, 'riktning', FILTER_SANITIZE_STRING);

    echo "<p>$temp</p>";
    echo "<p>temperaturen blir $temp&deg;</p>";
    echo "<P>riktningen är $riktning</P>";

    if ($riktning == "cf") {
        $farenheit == $temp * 1.8 + 32;
        echo "<p>$temp&deg; Celcius är $farenheit&deg; Farenheit</p>"
    } else {
        $celsius = ($temp - 32) / 1.8;
        echo "<p>$temp&deg; Farenheit är $celsius&deg; Celsius</p>"
    }
    
    ?>
    </div>
</body>
</html>