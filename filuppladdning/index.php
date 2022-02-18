<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Filuppladdning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Ladda up fil</h1>
        <form action="uplead.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">Ladda upp!</button>
        </form>
    </div>
</body>
</html>