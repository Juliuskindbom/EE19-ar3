<?php

//Ta emout data från formuläret
echo $_POST["namn"];
echo $_POST["adress"];
echo $_POST["mobil"];

//Om namnet är Olle
if ($snamn == Olle) {
    echo "<p> Hej vad trevligt att du är tillbaka </p>";
} else {
    echo "<p> Hej, du är ny här </p>";
}
