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
        <form action="./backend.php" method="post">
            <div class="mb-3">
                <label for="temp" class="form-label">ange temperatur</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="temp" aria-describedby="emailHelp">
            </div>
            <div class="kol2">
                <p>ange riktning</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="riktning" type="checkbox" id="CF" value="cf">
                    <label class="form-check-label" for="cf">C till F</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="riktning" type="checkbox" id="FC" value="fc">
                    <label class="form-check-label" for="fc">F till C</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>