<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>skatteberäkning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konainer">
        <h1>lön efter skatt</h1>
        <?php
        // ta emot från formuläret
        $namn = filter_input(INPUT_POST, 'namn', FILTER_ZANITIZE_STRING);
        $bruttolön = filter_input(INPUT_POST, 'bruttolön', FILTER_ZANITIZE_STRING);
        $skatt = filter_input(INPUT_POST, 'skatt', FILTER_ZANITIZE_STRING);

        if ($namn && $bruttolön && $skatt) {
        //    var_dump($namn, $bruttolön, $skatt);
        // om inte 10000 < bruttolön < 45000

            if ($bruttolön < 10000 || $bruttolön > 45000) {
                echo "<p>Bruttolönen måste ligga mellan 10000 och 45000</p>";
            } else {
                # code...
            }
            

        //    räkna ut lön efter skatt
        $nettolön = $bruttolön * (100 - $skatt) / 100;

        echo "<p> Din lön efter skatt är $nettolön<br>
        Beräkning baserat på bruttolön $bruttolön och skatt $skatt</p>";
        } else {
            echo "<p> du skicka ingenting </p>";
        }
        
        ?>
    </div>
</body>
</html>