<?php
// Ta emot data
$rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
$text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);


// Om data finns...
if ($rubrik && $text) {
    $texten = "<h3>$rubrik</h3><p>$text</p>";

    file_put_contents("blogg.txt", $texten, FILE_APPEND);

    echo "<p>text sparad</p>";
}

?>