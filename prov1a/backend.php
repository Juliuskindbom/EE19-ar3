<?php

$text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
$namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
$bruttolön = filter_input(INPUT_POST, 'bruttolön', FILTER_SANITIZE_STRING);
$skattesats = filter_input(INPUT_POST, 'skattesats', FILTER_SANITIZE_STRING);


if ($bruttolön >= 0) {
    $bruttolön *(100 - $skattesats)/100;
} else {
    <P> "lönen måste vara mellan 0 och 45000" </P>
}

if ($skattesats >= 10) {
    $bruttolön *(100 - $skattesats)/100;
} else {
    <p>"skatten måste vara mellan 10 och 30"</p>
}

?>