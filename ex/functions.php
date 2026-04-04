<?php

$newPass = "";

if (isset($_GET['length'])) {


    $uppercase = range('A', 'Z');
    $lowercase = range('a', 'z');
    $digits = range('0', '9');

    $allChars = [];

    if (isset($_GET['uppercase']) && $_GET['uppercase'] == "on") {
        $allChars = array_merge($allChars, $uppercase);
    }

    if (isset($_GET['lowercase']) && $_GET['lowercase'] == "on") {
        $allChars = array_merge($allChars, $lowercase);
    }

    if (isset($_GET['digits']) && $_GET['digits'] == "on") {
        $allChars = array_merge($allChars, $digits);
    }


    if ($allChars == []) {
        $newPass = "Scegli almeno un tipo di carattere!";
    } else {
        for ($i = 0; $i < $_GET['length']; $i++) {
            $randomKey = array_rand($allChars);
            $newPass .= $allChars[$randomKey];
        }
    }

}


?>