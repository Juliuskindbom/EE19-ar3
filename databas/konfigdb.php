<?php
//aktivera felmeddelanden under utveckling
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

//uppgifter för att logga in i mysql-databasen
$user = "movies_db";
$pass = "c3tWvw8ZyoWh6DDL";
$host = "localhost";
$databas = "movies_db";

//1. Logga in
$conn = new mysqli($host, $user, $pass, $databas);


//gick det att ansluta
if ($conn->connect_error) {
   die ("Fel! något gick åt skogen: " . $conn->connect_error);
} else {
    echo "Yes! vi är inloggade i mysql.";
}



?>