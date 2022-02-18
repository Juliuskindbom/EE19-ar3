<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>DAGENS HOROSKOP</h1>
        <?php
        $url = "https://astro.elle.se/";
        $sidan = file_get_contents($url);

        //hitta början på horoskopet
        $start = strpos($sidan, "Tvillingarna");

        echo "Horoskopet börjar på position $start";

        //sök vidare för att hitta var texten börjar
        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan,"</div>", $startTexten);

        //plocka ut horoskopet
        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";

            //hitta början på horoskopet
            $start = strpos($sidan, "Oxen");

            echo "Horoskopet börjar på position $start";
    
            //sök vidare för att hitta var texten börjar
            $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
            $slutTexten = strpos($sidan,"</div>", $startTexten);
    
            //plocka ut horoskopet
            $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
            echo "<p>$horoskop</p>"; 
            
            //hitta början på horoskopet
            $start = strpos($sidan, "Vattumannen");

            echo "Horoskopet börjar på position $start";
    
            //sök vidare för att hitta var texten börjar
            $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
            $slutTexten = strpos($sidan,"</div>", $startTexten);
    
            //plocka ut horoskopet
            $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
            echo "<p>$horoskop</p>";

            


            //hitta början på horoskopet
            $start = strpos($sidan, "Skytten");

            echo "Horoskopet börjar på position $start";
    
            //sök vidare för att hitta var texten börjar
            $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
            $slutTexten = strpos($sidan,"</div>", $startTexten);
    
            //plocka ut horoskopet
            $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
            echo "<p>$horoskop</p>";

            //hitta början på horoskopet
            $start = strpos($sidan, "Skorpionen");

            echo "Horoskopet börjar på position $start";
    
            //sök vidare för att hitta var texten börjar
            $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
            $slutTexten = strpos($sidan,"</div>", $startTexten);
    
            //plocka ut horoskopet
            $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
            echo "<p>$horoskop</p>";
        ?>
    </div>
</body>
</html>